read -p "Enter Directory name: " dname
total= ls -d $dname | wc -l
echo "$total"
