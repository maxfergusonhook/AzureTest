function do_something(&$arg)
{
   $retval = $arg;
   $arg = $arg;
   return $retval;
}
$a = 3
$b = do_something($a);
echo $a, " ", $b;

