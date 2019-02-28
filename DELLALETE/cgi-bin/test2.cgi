#!/usr/bin/perl -w
# test.cgi by Bill Weinman [http://bw.org/]
# Copyright 1995-2003 William E. Weinman
# Free Softare: Use and distribution under the same terms as perl.

use strict;
use CGI;

my $q = CGI::Vars();

print "Content-Type: text/plain\n\n";

print "\n";
print "Versions:\n=================\n";
print "perl: $]\n";
print "CGI: $CGI::VERSION\n";

print "\n";
print "CGI Values:\n=================\n";

for my $k (sort keys %$q) {
  print "$k [$q->{$k}]\n";
  }
print "\n";

print "Environment Variables:\n=================\n";

for my $k (sort keys %ENV) {
  print "$k [$ENV{$k}]\n";
  }
print "\n";
