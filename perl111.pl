#!/usr/bin/perl
@add=("two","words");
@arr=("quat","thund");
print "enter the word to match: ";
$str='hello world';
my $substr = <STDIN>;
chomp $substr;
if (index($str,$substr) != -1) {
print "pattern found\n";
push(@add,"@push");
print "after add two elements at back: @arr \n";
}
else
{
print "not found";
unshift(@arr,"@add");
print "after add two elements at front  @arr \n";

}
