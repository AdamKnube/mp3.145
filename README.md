mp3.145
=======

Description:
------------
 + Python based mp3 players built for raspberri pi. 
 + Began as a simple gpio project and turned into a network daemon.

Version History:
----------------
 + v0.0 - gpio: 2 buttons on a breadboard with a 16x2 LCD screen.
 + v0.1 - signals: blended the gpio with signals for remote control.
 + v0.2 - cmdline: dropped the gpio and signals in favor of stdin control (read ssh).
 + v0.3 - sockserv: uses the sockserv library to cut out the ssh client (in favor of my own someday).

Todo:
-----
 + Build a client which can run on Xwin, Windows, and Android (telnet works for consoles).
