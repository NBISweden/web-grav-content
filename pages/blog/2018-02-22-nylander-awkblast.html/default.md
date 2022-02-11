---
title:  '[but how do i...](<> "permalink for but how do i...")'
visible: true
---
    

February 22, 2018

[![](/assets/img/logos/icon-share-twitter.png)](<https://twitter.com/share?url=https://nbis.se/blog/2018-02-22-nylander-awkblast.html> "Tweet it!")

###  [But how do I...](<> "Permalink for But how do I...")

By Johan A.A. Nylander

**... get the top hits from BLAST outfmt 6?**

<img src='assets/img/awkblast.png' width='100%' alt='awkblast' />

Finding simple solutions for challenging problems always gives me a sense of joy and sometimes even relief: no need to spend a lot of time when you can solve it quickly, and then preferably with minimum code.

Arguably one of the most elegant solutions I’ve come across, is how to use the [AWK](<https://en.wikipedia.org/wiki/AWK>) programming language for extracting the top hits from the output of a blast search:
    
    
    awk '!x[$1]++'
    

This expression might require some background and further explanations.

## Background

If you work long enough in bioinformatics, sooner or later you will be faced with the need of “[running blast locally](<https://www.ncbi.nlm.nih.gov/guide/howto/run-blast-local/>)” (or “run a stand-alone blast”). This simply mean that instead of doing your similarity search by uploading your query sequence to a web page (e.g. [NBCI’s BLAST portal](<https://blast.ncbi.nlm.nih.gov/Blast.cgi>)), you run your search algorithm locally on your own computer and using your own data base.

The main benefit from running searches locally is that you can taylor your data base to your needs, and also manipulate the output so it fits exactly in down stream computational work flows.

Dealing with the latter is perhaps also where you face the first obstacle. Instead of having the results packaged and displayed nicely in the web browser, you have to read (parse) potentially very large files and manipulate the output.

If we take the output from a blast search as our example, the format might look something like this:
    
    
    Apa	PBF38905.1	92.115	279	22	0	2	838	48	326	0.0	518
    Apa	PBF45636.1	92.115	279	22	0	2	838	48	326	0.0	518
    Apa	PBG14713.1	92.115	279	22	0	2	838	48	326	0.0	518
    [...]
    Bpa	PDG94623.1	89.785	186	19	0	558	1	73	258	1.78e-115	325
    Bpa	PDL27043.1	89.247	186	20	0	558	1	73	258	2.75e-115	325
    Bpa	PDL27950.1	89.247	186	20	0	558	1	73	258	2.75e-115	325
    [...]
    Cpa	PIS68069.1	51.145	131	62	2	399	10	1	130	1.77e-43	142
    Cpa	PIS68081.1	46.617	133	67	3	390	1	12	143	1.31e-37	127
    Cpa	PCF98276.1	48.819	127	58	3	375	1	24	145	1.85e-34	118
    [...]
    

This is “format 6” in blast, with tab separated columns in the default order `'qaccver saccver pident length mismatch gapopen qstart qend sstart send evalue bitscore'`. Please see the [BLAST+ Manual](<https://www.ncbi.nlm.nih.gov/books/NBK279684/>) for further information.

For each query (`Apa`, `Bpa`, `Cpa` in the example above), the best hits are given as the first line for each query, and then listed in descending order. Keeping a number of hits in the output will inform us about the variation around the best hit, and can be very useful. But if we were interested in extracting only the top hit per query (ignoring the rest), how can we do that?

Here is where the example using AWK can help. The program `awk` (listening to commands written in the language AWK) is probably _the_ work horse when it comes to reading structured data and is ideal for this particular problem.

A break down of the code shows that the script (`!x[$1]++`) consists of a single statement:

_“If we can not add to the value for an existing index (the index being the string in the first column), then print the line”_

The central part is utilizing a data structure called an associative array (or dictionary/hash), which is the `x[]` in the script (the name `x` is arbitrarily chosen). This array is a list of associated values given as key-value pairs. If you know the key (or index), you can very quickly get the value. One feature of the array is that the keys are strings, and need to be unique, whereas the values can be the same, or different for different keys. If we already have a value, say `10`, for a key `k`, we can increment that value by one by using the `++` operator as such: `x[k]++`. Now the value for `k` is `11`.

Another great feature is that the array can grow easily. If we try to increment a value for a key (`m`) that is not presently in the array, by using `x[m]++`, the key is created and then incremented. The argument `!` is a negation, so when we write `!x[$1]++`, we mean _“if we cannot add to the value for an existing key”_.

There are a number of built-in variables in `awk`, and perhaps most useful are the column numbers `$1`, `$2`, etc (until the last column `$NF`). For our problem, we are especially interested in what we have in column 1 (`$1`), since this is where we see the identity of the query.

The actual reading and printing is taken care of by `awk` itself. The program reads from standard in and prints to standard out by default, so we don’t have to add code in order to read or print the lines from our input.

So finally, in other words, _“read the input from standard in line by line, and if we haven’t seen the string in column one before, print the line to standard out, otherwise not”._

And this is exactly what we want to achieve: we only want to print the line with the first occurrence of `Apa` in the first column, since that is the top hit!

More on column data and `awk` later…

`:wq`

## Complete BLAST+ example

  1. Get the software. Here we will use [BLAST+](<https://www.ncbi.nlm.nih.gov/books/NBK279671/>) as an example. On a Debian-based Linux system, installation is as easy as
    
         sudo apt install ncbi-blast+
    

  2. Get some data (fasta files `db.fas`, 252K, 500 seqs, `query.fas`, 8K, 6 seqs)
    
         wget https://gist.github.com/nylander/a044690c63494674d9b4fb30ba27762d/raw/db.fas
     wget https://gist.github.com/nylander/a044690c63494674d9b4fb30ba27762d/raw/query.fas
    

  3. Format the database
    
         makeblastdb -in db.fas -dbtype prot -parse_seqids
    

  4. Run a local blast search, saving output as “format 6” (tab separated, no headers). The blast suite of software allows you to decide the output fields. It might be time well spent to read up on how this is done so you can save your strength when parsing the output. See `blastx -help` and the [Manual, Table C4](<https://www.ncbi.nlm.nih.gov/books/NBK279684/>) for description of options.
    
         blastx -query query.fas -db db.fas -out blast.out \
        -outfmt "6 qseqid sacc stitle evalue bitscore pident qseq sseq" \
        -max_target_seqs 10 \
        -query_gencode 11 \
        -num_threads 4
    

  5. Get the top hit per query
    
         awk '!x[$1]++' blast.out
    



