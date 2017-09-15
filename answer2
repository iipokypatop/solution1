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
     
