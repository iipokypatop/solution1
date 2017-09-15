function arrayMakeKeysLinear(array $array_or_scalar, &$res = [], $keys = [])
    {
        foreach ($array_or_scalar as $key => $value) {

            if (is_array($value)) {
                $this->arrayMakeKeysLinear($value, $res, array_merge($keys, [$key]));
                continue;
            }

            $res[join('.', array_merge($keys, [$key]))] = $value;
        }

        return $res;
    } 
     

function arrayRestoreFromLinearKeys($array)
    {
        $res = [];
        foreach ($array as $composite_key => $v) {
            $link =& $res;
            $parts = explode('.', $composite_key);
            foreach ($parts as $key) {
                $link =& $link[$key];
            }
            $link = $v;
        }

        return $res;
    }
