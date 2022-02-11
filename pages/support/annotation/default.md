---
title:  'The nbis assembly and annotation service'
visible: true
---
    

# The NBIS assembly and annotation service

The NBIS assembly and annotation service is a national resource that offers assembly and annotation support to genome projects conducted in Sweden or with Swedish participation. There are two sub-teams, one of which focuses on assembly and the other on annotation. The assembly team is specialized in assembling eukaryote genomes, with competence stretching all from quality control of raw reads to the final assembled and validated genome. The core competence of the annotation team lies in identifying and characterizing the structure and function of genes in a given genome.

The service in a few keywords:

  * Project planning, general advice, or full responsibility for genome assembly and annotation projects
  * High quality genome assemblies including extensive quality control of data and results
  * Full-featured genome annotations with short turn-around and to a competitive, high standard.
  * Hosting of web-based tools for visualization and curation of annotations
  * Dedicated compute cluster for running complex annotation projects
  * Experienced bioinformaticians with PhD degrees and several years of working experience in the fields of genome assembly and annotation



## General information

Our work generally starts with a detailed discussion between your group and one of our experienced bioinformaticians regarding the project and its goal. This is to ensure that we understand the aim of the research and what you want to use the results for. One of our experts will then be assigned to your project and be your main contact all throughout the support process. The level of interaction between the expert and the customer is very much up to the customer, i.e., you. You can be highly involved in the process if you want to, or just let go and let us deliver the final results to you.

We prefer being involved as early as possible in the project, preferably already at the planning stage. This way we know that data of the right type is ordered, and we can also remind you to order RNA-seq data for annotation. Early consultation is not counted towards the total number of hours used in the project, it is always completely free.

## Genome assembly

Genome assembly can be divided into three parts: Quality control, assembly, and assembly validation. Each of these parts is of vital importance for the final result, and all steps need to be run with an attention to detail. The aim at the end is to have an assembly that is as contiguous as possibly, but also as error-free as possible. In other words, you want long parts of the genome be assembled, but you also want it to be correct. We have pipelines setup to run all of these analyses, which in combination with our long experience of assembly will generate assemblies of the best possible quality.

Quality control - General sequence quality is examined, but also level of duplication in the sequence reads as well as presence of adapters and contaminants. We also run k-mer analyses to get an estimate of the genome size and an idea of the complexity and information content of the read data. If there are serious problems with the data to the level that we cannot guarantee a good assembly, we halt the project and contact the customer to discuss what might have gone wrong and how to best proceed. Sometimes data need to be re-sequenced or additional data need to be ordered.

Assembly - All assembly projects are different, which also means that no assembly program will be best for all projects. We run a number of assembly programs in parallel and send all results on to assembly validation.

Assembly validation - Here assembly statistics are investigated and the assemblies are checked for misassemblies and other assembly artifacts. The results are compared and the assembly with the best balance between contiguity and number of assembly errors is chosen for annotation.

## Genome annotation

An annotation project starts with an inventory of what data is already available, for example annotations from closely related organisms. We then perform quality checks on the data and generate the initial raw computes (mapping of all data onto the assembly). The raw compute stage typically includes protein sequences from related species (where available), modeled repeat sequences, non-coding RNA predictions using tRNAscan and co-variance models from the RNA family database Rfam, as well as reconstructed transcripts from your RNA-seq data.

From the raw alignments, we will then compute a first test gene build. Normally, the pipeline that we use for this purpose is Maker2. Once a draft gene build has been generated, our experts will manually inspect its quality and determine the subsequent strategy required to achieve the best possible annotation result. Commonly, this entails the training of an ab-initio gene finder to further improve the detection of novel loci as well as a fine-tuning of the build parameters and input data.

Once completed, the next step is to rerun the pipeline on all data and scaffolds. The resulting candidate release will be uploaded to our genome portal for customer feedback and manual curation. Curation is generally performed together with the customer and often limited to regions of particular interest. It can however also be carried out on the entire genome, where requested.

The stable gene build will finally be subjected to functional annotation in order to identify putative biological roles, conserved domains and GO terms for subsequent analyses.

## Getting support

If you are interested in getting support for your assembly- and/or annotation-project, please open a support request using our [form](</support/supportform/index.php>).

This service is partly funded by user fees. For general information about NBIS support, please see [here](</support>).
