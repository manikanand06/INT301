#!/usr/bin/perl
@coins=("Quater","Dime","Nickel");
print "1.coins=@coins\n";
push(@coins,"Penny");
print "2.coins=@coins\n";
unshift(@coins,"Dollar");
print "3.coins=@coins\n";
pop(@coins);
print "4.coins=@coins\n";
shift(@coins);
print "5.coins=@coins\n";
print reverse(@coins);
