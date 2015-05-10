mp3.145
=======

Description:
------------
 + Python based mp3 players built for raspberri pi. 
 + Began as a simple gpio project and turned into a network daemon.

Version History:
----------------
 + v0.00 - gpio: 2 buttons on a breadboard with a 16x2 LCD screen (signals for 
           debugging).
 + v0.10 - signals: gpio wasn't practical for the garage, added option to 
	   disable it (for memory/cpu).
 + v0.20 - cmdline: dropped the gpio and signals in favor of stdin control 
	   (read ssh).
 + v0.30 - sockserv: uses the sockserv library to cut out the ssh client (in 
	   favor of my own someday).
 + v0.40 - clients/www: locked the sockserv to 'localhost'; made clients and a 
	   web interface.
 + v0.50 - bugfixes and improvements. added searching and custom volume. fixed 
	   the 'list' command. replaced all regexes with s.find().
 + v0.60 - added a file that tracks the 'c' command basically to allow resuming
	   and configuration persistance
 + v0.70 - added recursive dir searching and full discography adaptation. Not 
	   to be confused with integration.
 + v0.75 - got the todo list gone. should now only track files ENDING in .mp3
