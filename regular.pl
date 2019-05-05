#!/usr/bin/perl
my $a="9fsdvbndmkancabc";
if ($a=~ m/[0-9][a-z]|[abc]/)
{
print "Yes it starts with digit and end with abc";
}
else
{
print "NO";
}

