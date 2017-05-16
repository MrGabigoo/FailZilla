# FailZilla
PoC for FileZilla server credential harvesting



## What is this?
FileZilla is a great FTP client. It's easy to use and effective, but has a serious shortcoming as far as storing credentials is concerned.
This is a proof-of-concept that aims to show how easy it is to harvest server credentials that were saved in FileZilla.

## How does it work?
In this repository you'll find two main components: a **client-side** program and some **server-side** code.

The _client-side_ program runs on a windows machine and retrieves the contents of ``%appdata%\FileZilla\recentservers.xml`` and sends an HTTP request to the _server-side_ component running on a remote server, which then stores the contents to a text file on the server.

## But why though?
Many, _many_ people use FileZilla because of how simple and effecient it is.
People who are new to web development (or don't necesarily think of these things) are essentially putting their server(s) _(and data contained therein)_ at risk, since all it would take for someone to take control of the server(s) is no more than a running malicious executable on their computer.

My goal is to show how incredibly easy it is to do just that and hopefully raise awareness for this issue which has been present in FileZilla for years and is _still ignored_ by the developers of FileZilla

For the record, the time it took me to develop this entire PoC was no more than **±10-15 minutes**, which shows how vulnerable FileZilla is and how easy it is to exploit.

## Why should I care?
FileZilla stores **all** saved server credentials in an **xml** file stored in %APPDATA%. 
Passwords are saved _encoded_, but **not** _encrypted_.

This method of storing credentials is **not secure**, because not only are they stored in a non-protected directory, but they also happen to be stored (pretty much) in plaintext!

This means any program or script which is executed on your computer can read these credentials, which makes saving your server password in FileZilla a security risk.


## Why so redundant?
I don't know.

## Can I have a quick demo?
Sure, just download (this executable)[https://github.com/MrGabigoo/FailZilla/raw/master/failzilla-clientside/bin/Debug/failzilla-client.exe]. It **won't** save your data, only demonstrate the idea (it's a different build of both the _client_ and the _server_ components)
