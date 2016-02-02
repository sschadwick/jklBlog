---
layout:     post
title:      "File Locker"
subtitle:   "A secure solution for storing documents in the cloud"
date:       2015-12-08 12:00:00
header-img: "img/odd-1037935_960_720.jpg"
published:  true
category:   Projects
catname:    Projects
---

[![Build Status](https://travis-ci.org/sschadwick/file_locker.svg)](https://travis-ci.org/sschadwick/file_locker)

The code repo is available at: [github.com/sschadwick/file_locker](https://github.com/sschadwick/file_locker/)

The app is hosted at: [file-locker.herokuapp.com](https://file-locker.herokuapp.com/)

File Locker is a MEAN-stack app that offers a secure personal cloud storage service. The server is written using Node.js and Express.js, with MongoDB database integration and a front-end written in Angular.js. Any files uploaded to File Locker are compressed and encrypted using AES-256-CTR. User authentication is handled by Passport, bcrypt is used to generate hashes, and Encrypted Access Token (EAT) is used to encode user tokens.

Files are encrypted on the client-side, before they are uploaded to the server. This means that only the author of a file with the correct decryption phrase is able to view the files. As such,there is no support offered for lost encryption passwords. Functionality of File Locker is similar to most commercial cloud solutions, however due to the security design and implementation users are not able to share their files with others.

### Getting started:

First, create a new account using using the default invitation code: 'FLInvitationCode'. Once your account has been created and authenticated, File Locker is ready for use.

![Welcome](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0080.PNG "Welcome")
![Sign Up](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0081.PNG "Sign up")

#### Uploading:
Uploading a file is intuitive and simple. Once a file is chosen to be uploaded, the user is prompted to add tags or a description to the file, as well as creating a passphrase to encrypt that specific file.

![Upload](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0082.PNG "Upload")
![File Manager](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0083.PNG "File Manager")

#### Editing a file:
Although the files themselves are stored encrypted in the database, their metadata is not. This means that users are able to rename or edit the description on their files without the passphrase.

![Editing](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0085.PNG "Editing")
![Changed](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0086.PNG "Changed")

#### Downloading:
To download a file, the user simply chooses which file they would like to download, and then enters their passphrase. Only the correct passphrase for that file will initiate the download.

![Downloading](https://raw.githubusercontent.com/sschadwick/file_locker/master/docs/Demo/IMG_0087.PNG "Downloading")
