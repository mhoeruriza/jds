<?php
class Pipeline
{
    public static function make_pipeline()
    {
        $funcs = func_get_args();
        return  function($arg) use ($funcs)
        {
            foreach($funcs as $func) {
                if(empty($value)){
                     $value = $func($arg);
				}
                else{
                    $value = $func($value);
				}
            }
            return $value;
        };
    }
}

$fun = Pipeline::make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; },
                          function($x) { return $x / 2; });
echo $fun(3); # should print 5

?>