---
title:  'Swedish sensitive data archive'
visible: true
---
    

# Swedish Sensitive Data Archive

## What is it?

The Swedish sensitive data archive is a secure data archive and sharing platform for sensitive datasets. The archive is designed for large volumes of research data store and currently has the capacity to store 1 petabyte of encrypted data.

Data is strongly encrypted with [crypt4gh](<https://www.ga4gh.org/news/crypt4gh-a-secure-method-for-sharing-human-genetic-data/>) (a standard for encrypting genomic and other data types), and stored within Sweden in highly secure data centers while non-sensitive metadata can be made available to make datasets discoverable.

## Current status

We are now piloting a standalone instance of the archive for storing and sharing.

In the future, the archive will also be integrated with the [Federated EGA](<https://ega-archive.org/federated>) network to make data even more discoverable and accessible at the same time as preserving the high data protection.

## How is the archive being developed?

The Swedish Sensitive Data Archive uses a software stack that has been developed by NBIS in collaboration with other Nordic ELIXIR nodes through the [Tryggve](<https://neic.no/tryggve2/>) project funded by [NeIC](<https://neic.no/>) and coordinated with Central EGA through [ELIXIR](<https://elixir-europe.org/communities/human-data>).

The entire stack is open source and can be audited.

## How do I submit data?

At this stage we are working with a limited number of datasets. If you want to be on the waiting list for submission, please apply [here](</support/supportform/index.php#sdaform>) and we will contact you as soon as we are ready to accept new data submissions.

In preparation for submission you need to verify that a data processing agreement between the data producing university and Uppsala University is in place. A list of established such data processing agreements can be found [here](</support/general-processing-agreements.html>) (Case 3, EGA-SE). If no suitable agreement is listed, contact the Data Protection Officer at your university to establish one.

Another preparatory step for submission is to encrypt your data. The public key for the archive (used for encrypting before uploads) is availabe [here](</assets/doc/crypt4gh_key.pub>). Upload instructions are currently available [on GitHub](<https://github.com/NBISweden/EGA-SE-user-docs/blob/main/README.md>).

## How is access to data controlled?

Access to data will be managed through a secure interface where each data controller can review requests for access to data, and grant or deny this access.
