<!DOCTYPE html>
            <html lang="en">
              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>test login page</title>

                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

                <style type="text/css">
                  .panel-login {
                    border-color: #ccc;
                    -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                    -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                  }

                  .panel-login>.panel-heading {
                    color: #00415d;
                    background-color: #fff;
                    border-color: #fff;
                    text-align:center;
                  }

                  .panel-login>.panel-heading hr{
                    margin-top: 10px;
                    margin-bottom: 0px;
                    clear: both;
                    border: 0;
                    height: 1px;
                    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
                    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                  }

                  .btn-register {
                    background-color: #1CB94E;
                    outline: none;
                    color: #fff;
                    font-size: 14px;
                    height: auto;
                    font-weight: normal;
                    padding: 14px 0;
                    text-transform: uppercase;
                    border-color: #1CB94A;
                  }

                  .btn-register:hover,
                  .btn-register:focus {
                    color: #fff;
                    background-color: #1CA347;
                    border-color: #1CA347;
                  }
                </style>
              </head>
              <body>
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <img class="center-block" style="width:100%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdEAAABRCAYAAACNBJz3AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAABIAAAASABGyWs+AAAZeklEQVR42u2de5xcZXnHvzN731x2cw+XEAJEFJRbE9Bw0dYqVRHQItQLXvBC+6lUq2JbtVYtFitixQtYqy2tWqsYBIKIVK1IQAMEJKgRSWIgJJCQG8ludrPZnekfvznsmdlzn3PmzE6e7+ezn0xmzjnzznt73vd5n0uhXC5jGIZhGEZ8inkXwDAMwzAmKyZEDcMwDCMhJkQNwzAMIyEmRA3DMAwjISZEDcMwDCMhJkQNwzAMIyEmRA3DMAwjISZEDcMwDCMhJkQNwzAMIyEmRA3DMAwjIe3Oi11LF+ddFiMB5afgyhct5nv3rk3jcbOAvwG+BTyY928zDMNoRtZt/P2zr20nOtnphDntJWb0T0/jaWVgCBjL+2cZhmFMBkyITnIKs+Edd63nzMWH5l0UwzCMgw4TopOdEtAJh7aXmT2zP+/SGIZhHFSYEG0BCrPhkpXrWbJoft5FMQzDOKgwIdoKlKDQDUd3lpg3e2bepTEMwzhoMCHaKsyCt6zcwHMPm513SQzDMA4aTIi2CmNQ6IGTesvMnzMr79IYhmEcFJgQbSVmwhtX/p4Fc/rzLolhGMZBgQnRVmIMClPgxX0FDplral3DMIysMSHaavTDhSs3MrtvSt4lMQzDaHlMiLYaY1CYBq+e3W67UcMwjIwxIdqKTIPzVz5GT1dH3iUxDMNoaUyItiIlKEyHNx/WbbtRwzCMDDEh2qpMhVfevYlCoZB3SQzDMFoWE6KtSgkK/XDZkb3mN2oYhpERJkRbmV546T2bGR4ZybskhmEYzcqcem5ud73+BLAnxYKVgS3AI8ADKT53CvBa4HDgQIrP9aIT2Az8EHgqxn2XoIZJIy9nO7ANWAfsAH4d+c4SFGbAxxb3c8WGNrbv3J1lXZ0I/CHQleB3l4F7gJ8DBeA5wAXA/oj3twHDqJ1+G+H6fuAioE+1lCndqO3uAHZGvGcpcCbRF7ntwHbgVrz7aSfwJ8BJwL4YZW8DVgF3Ea1NZwKvA2YAoynWoR8FlP/2ixGvPwJ4NTAtZvna0Nj7NrAXje0/Q21bDrm3CAwAP0ZzYRhdwKuA4yu/La16OoDGxm+Ax1N6LsBxwB8BvWQ/lqYAK4E7qa9/FYELgWXAXOAQ1K7bgfuAbwK7gRejOW2gcl8XsAnNM1udh7mF6EeIPmlFoYyE8nbUeb4G3JbCc6cCfwEsIfvk0W3Ag8DDxBOi7wGOJXyARcEZhDvQBLgFLUpWoAkumB5YtupJnunOuKY08f896uhxf3cJ+EckRIvAC4B/IHr7FtAg2EI0IToTeD+aVNNooyDagZ8Cq4kuRE8HPgZENa8uAoPAYcDHPT7vQouGi4i38CwA16AFTpS2mA18ANVr1hOqwy6iC9FFwIcq5YxTvgJaCN2O+tl84MNoERbl3m1o0o0qRN8EnEu6m4QxNBdvRe15HfC7FJ57IqrTmWQ/ljqBL1TKn1SIngu8GzgBmOfx+WvRgvNLwPPRnOao8trQOF6DjxAtoJVVmvRUCno8mmS/gwZZvfSiCaYRPhy9qPLi3tOVYhlmVv5AnfZstOL/JfBPwEO+d5agMAu+cMxcPrR+kJ27nsmqnjrQAqcz4f3u+9qJ375lqvtzEEXSb6Mgeoh3dOLUZRyrsE7gYrTj/bnH592oH8fty3HqyKnXpH0gCVNjXNtG8j7ay3h7OM+JOl/2Er1vFlB/SdJWYUwBFgKnAi8Brga+Uecz2yt10aixVM/3XIo2i4cHXDMNOAc4GngG9Wl3O08Yy408E10A/DVaNdZrMpr1DrT2u+KusLIuXxGpPC9EKqY/J6gtu+CUVduyFKCglX3S1WGJ6p1BkhXtaIz7yjR3H0pal4uQlsavDEmIs2NrdL1CvHoqx7zezVgdz4nb/o2ow5OAzwBvqfM59dRpEpJqOF4DfJJgAermecBpHu9PaMtGGxYVgbehSd9Ih2PRbvR9+C1OSkrcff3Jc5k21cIBtjBF4JXAeXkXxJgUzEOawSV5F6QBfByI66YQabOXh3VuL/AOdH6ThGKCymg0jY5wMAOpKT6An6qqHY67fyednZlpwHtQ2yahiFRNDkmOFeKo19qo0yIvY6aQ/KhiFlqkus97CsiYKgnTqF9z1Cx0Mn4sEpfZjKtX24l2Huowh+h9s562SsJxwDvruL8bzT/NzLloZ+nHGLLX+R4JjGvdevoTXa8vAC4nuOH/FB22u3EMG5aGfO8iZPWURB//NPAyNGmD9NcfxL9TH0Cd5MGQ554OXJugPH7PqtXd34u/Pn8UWI52lA5dSC9/GvB6vA/B3fQhQfoIcIvXBYUe2JGdhe7XkQWiM+H+HbJg9ONApZ4cYzbnoL4E3Mx4f1yAOnetUNkHfA6ps537nohY1o3AH7ie+Ubgvfifle0A3g78PuS5r0NtUC/XVX5zofJ3BtGNZ0DWkm8EPlv5/wAaA+4x8ingFR73XgA86vr/dsYNK5KyHFn/O0wFrkBzgB+3A1ciK0mHO6lPwNyNjEUcYXg2MmDzU89sQ+rxdZU62Fx5/zfI+K2I5oxlVC80dqP+4syPo8joLQp70dn2NNd716AzTD/WIo8At+V1EfhjZBgzPeDeIjojfS7RjPJqWY7O4J06varyvX4btC149zs33UizdlGC8njxevzPl1cBb0UGaiU0z14GvCvqw91CdI3r9RLCdc8PUz3YnGesAb4LvDDg3j6kdkoiREdrvvd5BJ8hlFHnWEMwae5MvKzwguqzjAZsbRlXA99Hg+gSZBEYpD2YjiarB/ASKNPhxkP6edO6YfYNDaf4cwEJmh2u//83cBZwqM/1zmr+Rx51sZvxyXM+3kYZG9EADmtXL0bQxONwJsFnVgdQf98Q8txT663ECk9X/hzmxry/E01At6MJvwQ8VnONn6Xwr4hmRRr397jbqQtNWkHsRP14wPVevdaqA1S7iB1N8LgcwXueG6rUE8j4pJbRyudJrF/HmLhY2x1yzz40V9TWz1pkfHgbwZqNBWjjk0SI7qK6LXcSPJb2Ez5mi2g+TItj8dam7Ebzpft3P40WHkWkMQ3Fb0KOYknmt2rfjAyIwr43bGcVlShqr7SuyRKvlVIJrUw3olX5xVRPrl6cgM6dJ6pWC7Dg0YFGhQK8g+DVdwHtVIPqvR94A94DYAPJBKgXYf29QDSLzqgWmHEokKxvnoKsEf3wG/tZWNbW9u0uwo+SikzU3KTdccPqNUq7FxPeF4ewuirgreXaj/wqrwm5v5fkau4kZQ2ji3Qtk4/0eb92Me2wDbieiNqDrM5Ew1SnzYhf47bRHGdCQ8hF6J8j/I5L8dsBZu8v6uAM4CDLvdcQXLfTgPM93h8E/o/GWgVGIagPpc0ILl81D9qRavbsvCvFyJVRglzgmpdizPeD8FvQ9COfUS/WAb/weL+7tgxZrJwh2i6zGQSTm91IjeJWSXYjdc5g3oWrMIpWSC9BZ8F+HIbUM+vJ3gE6iBuRoFzo8/lM5Ni8wqOcBXQu6nXW/Tg6H2s2tjGxD/UilWqagUxAar+7kSrvTT7XHFL57E4U0ck4+Ghj8s3HJTSOHqVaXd5XeT+um8uv0XxY+xs7kcp2DxODlGxHAU++w/hivYjG9nr3hVkJ0bDdEsCTGX13Uu5FqtDaybxE+hNgPexAwskJteXHK1B4qqhRcrLgHhTpaWHANeejc9/ac+3p+BsmbaQ5tR03ozp396ECGoRpBzBuQyHIvoW/EHVU5j8D/i3vyjFyYT7Ban3QWXGaZ5D1sh8ZDV7LxLE0Qvyx9Etk5+O1UJiOIi6dh4ztvlN5fwyda//GVYZC5XWVEE9bnXt45YdfEHLdHqKErGssY6gzDdb8DdG4EGZRWY0aN4hlBFvlNYIxZNwSFK/1PLw79zQU57SWAeB/ab42AQnL2j40gHaBaZfXqbP7gH8NuK4dWeo+J+/KMRpKAc0B3weOCbl2C+nZF6TFCN5jKcli9JsEH/10AicjD4O1yFLfiYs8xngwGOd1FfXsRL+GjF6KlS+bjtRv7YQL503IhL8RdKBVjZcVnbM9vwYF2Z4srEWqjiAn6aPwMd3v7OxgcF9asa1D+S7aKR3t8/lM5Md1o+u9InJB8VoErEfq30YyA/gPNJBrBX430mL8A+kmcIhCOxrU1yH1vp/v9VloYXsl2ar3d6CxNoNxzUIv6Y2tq6iOzewEoD/YWYySDzh1XkDanyMIn+PLSKsTPbFFfcxH2hqvcjlj6WN4z9dJuQvZULycYLV1J3L1uRq56H0V+Ao6PvIdN/UI0dMS3vc0Cje1KcVKCqKAJmQ/tiKV2GTiAOHq8AJe7dsBd7CP0zs7GBnJOgkOMG7qf3TANedRLUSnoN1TLWV0Rr2OxtJJsMvWKPlad/8WBcy+An9r0Xci9fpPMyzHdsZ9U7Pg0xk+ezIzDWUcScIqJLQaZTvRjYSZH6Okf8xYRirte/B3uXNTRG5lH0L+vh9Bu9T9fhc3ku0oW8f1Df7eg5UjvN4sN96E4AcE79LOoVoITcXbIXsXCuhgVLMfneXcG3DNkch3NG9XLqM5KCN/4A8z0Ye4FXkMzSmbiXe0Mg/ZE/wPEsATZs9GCdERpIa7FKWyMRrDAppj0lxOcCq5fmTFCzKYeSHe2Tk205xWuc3AehTVKEi9cDHj58x5Wm0b+VFGZ4s/Qmm/fpJ3gRrIGhTm8Haqg3hE4XzgJpSRrIp6hOgY2nqHZc8ood3DMVSr7JqFdprLvDtNhvFom0JDtLhVbEEWckH95PzKv13Amz0+LyPVcFjovTzIwg80CT9BA92PKSiubifNZXFu1IeTScX5C2IvUk++nHDjxDzIeiztQUnP34CE6t4Y9y5FR5FV0e3q0T3fxrj7xEJkvOAllIvoPGw6jTe8AHWwJ/H3k9tO/FXJZGEVtYOqDFsO76W8dl+yJybnFjRw+z0+K6KgAN1oB/oyj2t2IYOEPBhDfcjPMvAJGp8CzIsnkZHcK/GPB/sypD7Pyr3NaDw7UYSwUbQhOB3FJ/eiB4VK7SDdpN9RGUWGOn40aiytqPy9FXgPMsSM4s1wNooI9+z5fD0D6TLGdelF5Lu3wOfaRZUvzSMF2gHk0P9wDt+dFUWqA1R7UcJrUTMK5z2cx1qGm5AFa7/P59ORSncQbwHwFPmpnrahVehT9T6oAawGPo+sC/24FP+xakw+NqCdlcM5aNHqpWHrQONsBXJ/aTSPE2xk2Giur/xdgmTasYwnN/HjHFxCtB51rvvMqoQGrt+BbQfSvydNf1YvcdIWTQYWIlPsIJ7CJ9LSlN6wPpIJg8D9+K8yiygwwMUen5VQ6LJGWXR7la0/p++OyzDKbBMULP/lBKeGMiYXbVTPx7cSHOpvLspOk0Wc5DDySL9ZRDKo9s+9yPh3FG/6asIXyye4/5OmSueLKPC8nwlxH9qJRE4x02A6Uc5At/qziFR4e2iuOK1L0QF5EKtpPjX1l9AE7pUPtoA0Bl6C/2nkMN3s9CBh614oFNH54x4ap/J9CI3HT2Nq23ooMzkNsIro3PPWgGuWoLF4a6QnNpYCWhRMpXrMtKE5bYB47XIK8CKqheZ+5MPuDtFZRhlc7kJC1W/TV7UpS3OADSMpfrXP551oN3odzRmy7TjkjO4WPJ3Ix/HL1MRLzJFudK4Vlpj8FsLTTTWau9EZtJ8Q7cR7dfwEOvNpds5EC8naPvQQ6veNDHV5C/K/Teo/aGishVm3N6OQLSGblQdRJB4vnLyZdxLPuKYRdAAXIrWzO5hGDwrS83XiRS56NfBRj/fvo1qIOtwBvB/4T/xzQD9L2qvU61CCbL+AxzPRbvS1NF/YtsPRTqiWdWjF0ixC9CI0OQaxBw2OPAwHwrgDHeJHdb0ZQ3klm/G31HIs3n3oUJRftZFC1HF5OYXw8/ODFSfpuR+zUfSlIEIn2Rx/20eQ0PFT256GElZ/Je/C1tCGQha+yuOzrWgsxWEIzSNuy9+9aKf5gM89D6AgJieGPTxt/fQQ1Rnsa3Esx85I+XvTwE9dO0hzWF6CDrQ/THgC8W8Qnnc0L64lXlacncjPdDLgJ+j3kc+i8ccEu7wc7BwgfHEWZMfRjWISewniPM7+3JRQkJObA67pQ0K0GW1GhmO+H5cevO0vHMpEdLfxa2hP/8Ia/CbCawk+1J4FvI/0OlmUskbx58g7BmfQYF6MwrZ9ufI6iJ1IDbF7widFKO+gUUm5/fgtsuSOqgZ7kuyjFIX5TJaJJvizSDdWxr9vhgmAXSjGdbNZFQ8QbmPgBPPPkq2EZy95G0op58Vb8LYBKZJu+sSwunKSZ3hxFcH9+ySqLXuzLmuUxeQQ2Wue2pFGzytTVAFtWJ4f9UEOZzOebeIEwlW9L0EWgE6M1p+5fvgn8N89FNA5zbuRzr6I1A2PozBUYXQCL0Crp1HUCYJUg0WkGghSaZWBU6NUWERORW4a7g4TtGgooLBsZzG+qi0gt4/jUbiqMyN+97/g584zAneeeRgHVueehe4GdAYdZh04hs4t0jbq6kFqmp7KdxxPcPt0of4e5N9WQv0yDRYgtzBH3ejVN50+cyZaMZeQy1ltCLc7kQn/36Zch1EpIvX9UWgyLyODkfkh9x2K5iQnEHkbco7fQXrnkOtQ8I5jA655KXIX+jpSkRfRsdTJ6GjKq9/sJrkleTuynJ6H5tMxwvOB9qFjBGextatSV+XKvzehYyAv+tECfT2a/9sq3/s7oqVHm4cC6XSgPugZGs9FL9XznBddBKdPTItOlFiiD1hZqb9uNKY+GnBflY+gW1CuQHriUSQAwnT9n0OV7ZgPL2TckOUW1Hgn+Nzbj5zCt1XK0IviE/5VhB/ej1ZXS1Cj9xCcV7Md+CTBE/FYpfLS4gtIzeMI0XJIfbajQbAMdeJypV7DzmNqWV75bu+dyyBcfk9ThMlcDlxOuBDdg2JWps08lD7sCNQvegleNPYhF64x/Ae/M27S4FxkJdiB+oJXPbn7TAfBhn3fqjwzzKI7C7pQ4uP3MK7WbotQV2cgQVVCdd6BVI8/ID0huhUt/l9K8EL8MrSQvadS9oX4H0mVkAo1af7YXhT4/FzUpgcInweOYtx6vYwylryu8v8RlBTgNfiPt5PRnL2nUg97kIFclAhzZ6E8nDPQGOgjeEE6F9mY+KlKy6i9g+b0NOlGGr770eJneqU+gvpDVRpP98TRgVZYUanVo7snl1GUGSCsEea6XvdH/N4iOhOcRnSDiUbn1ZwT4/c4dBF+1hnECjTYvVMIFaE8BLPm9LNj5+4GV8cEHkFaiBcTPOAeJ5usI+2o7/VHvL7RfqJTCN99gCYA9+Jvqs91a5DxyJWEO5JnQZ9HWcPwstROc6Hr8G0kYJaGXHcM4Xk5QTvleuKDF9A83Et0QdJO9dztfu3sRm/EP8k9VM8/U4he1z2or0ZdQDrzd7OxJOJ1w9RoWbM8/L6NeIleo6rsyiRf5TWKRpZvBPk0vYsg688hWHHGQoaGsji2S8Rygg229qM+lIV/brP3oTHinwntJ7g+bwB+ntPvSasNszDO2oAyS6URyGMQWcRuqPM59ZwHlj3uH0aav6h9fj/R67oU47mtwG3UGOtlKURHgI/n/YtbnBXAX6IzDX/jkSKUd8EVqzawr3mE6E0E+7EOICtjIx22oN3o9rwL0oSsQOrmh+p4xnpkMNls7iIOa5g8Vu6NYJj4vuc/RDJtq/vNNIVo7bPKlUL+KuL9/TG+Z3aK5Q5jDvHTic2NeX1UBlF9fhXFP31H5XXwqnEv3HDGkUztbdQxQyQ2A78I+Pxpsssy0UZ2beTFLOL5ZE8hfp/rwl+d63Az4UH80/YdL5CeC0UW6lyH76HF6KeIJ0wfQ/Yc7yIdAeqoc9O+fx/ynIjCVKKr/XuIb7tRD33Ez7o1lYlnsN3ICPOThAelWYuOQi7FQ7vqHjAfrPPHeZlY70OdK4pfaNQA8XuQ0UWUM6M02Eb89FuXU99A8GIfWgE9jkL6RfNdbYPyXrh2zWYGB/P24pnA1ZXfVDtxjyGDj6zYBryXxp2VbyJeoIUfoPEUJy3UKMGLEtDq+yqUls5vInoi5d8+glyu0kgAcT/ZRgi6r/L3XWRcshgJiMMr/xaR0d4mpPlZBzyK+mpaKushlG4raZD2MnIh82I18HbCo52NEF31fzcyCM1ygePmQeKrj1cgQene6A0jQ7HbUZufitp7EdqUDKH2/R0KA+hbH4VyWX1y19Iw90NjUrIX/uvkRVz/8Bb2DoS6rs1Eaq3lxDvProdeJk7oTic2jLzpRtqo6aifjiABmksqJCNTZiMXnTISsk/gMw+t2zi+r7Lg1K1MG5QH4Yb1O6MI0LxoeGJTw4jBMPllDzIay3YS2AzkHZrKyJKd8LXTj2JoKCwgj2EYhpEEE6KtSpv8Qn+0ZYBn9jZbRjTDMIzWwIRoq7ITrlt2NDueabYsR4ZhGK2DCdFWpLILXbV9iN0mRA3DMDLDhGgrsgM+v+wYNm3dUf+zDMMwDF9MiLYaRSgPwyN7DzSzRa5hGEZLYEK0xShvh88uO4a1j+We7swwDKPlMSHaShSBEdi0b4yBQXO/NAzDyBoToi1EeRt8ZtliHlyX2De8gGJhxgk3ZxiGcdDybNg/wzAMwzDiYTtRwzAMw0iICVHDMAzDSIgJUcMwDMNIiAlRwzAMw0iICVHDMAzDSIgJUcMwDMNIiAlRwzAMw0iICVHDMAzDSMj/AzNMdYNLAIgeAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE1LTA1LTE0VDE4OjI0OjE5LTA1OjAwctPfswAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNS0wNS0xNFQxODoyNDoxOS0wNTowMAOOZw8AAAAASUVORK5CYII=">
                      <div class="panel panel-login">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-xs-12 active">Register</div>
                          </div>
                          <hr>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="hidden" name="emailValidate" />
                                    <input type="email" name="email" tabindex="1" class="form-control validate" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="firstnameValidate" />
                                    <input type="text" name="firstname" tabindex="2" class="form-control validate" placeholder="First Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="lastnameValidate" />
                                    <input type="text" name="lastname" tabindex="3" class="form-control validate" placeholder="Last Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="positionValidate" />
                                    <input type="text" name="position" tabindex="4" class="form-control validate" placeholder="Position" value="">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="5" name="interested">
                                    <label for="interested"> Interested in applying</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" disabled value="Register Now">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-2" id="apikey"></div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

                <!-- Latest compiled and minified JavaScript -->
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

                <!-- js for making request -->
                <script type="text/javascript">
                    (function($, undefined){
                        if($){
                            $(function(){
                                var testInput = function (input) {
                                    switch (input.attr("name")) {
                                        case "email":
                                            if(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/gi.test(input.val())){
                                                return true;
                                            }else{
                                                return false;
                                            }
                                            break;
                                        default:
                                            return input.val().length > 0;
                                    }
                                }

                                $("input.validate").keyup(function(){
                                    var nameInput = $(this).attr("name");
                                    if(testInput($(this))){
                                        $(this).parents("div.form-group:first").removeClass("has-error").addClass("has-success");
                                        $("input[name="+ nameInput +"Validate]").val(1);
                                    }else{
                                        $(this).parents("div.form-group:first").removeClass("has-success").addClass("has-error");
                                        $("input[name="+ nameInput +"Validate]").val(0);
                                    }

                                    if(
                                        $("input[name=emailValidate]").val() == 1
                                        && $("input[name=firstnameValidate]").val() == 1
                                        && $("input[name=lastnameValidate]").val() == 1
                                        && $("input[name=positionValidate]").val() == 1
                                    ){
                                        $("#register-submit").attr("disabled", false);
                                    }else{
                                        $("#register-submit").attr("disabled", true);
                                    }
                                });

                                $("#register-submit").click(function(){
                                    // $(this).attr("disabled", true);
                                    var form = {
                                        email: $("input[name=email]").val(),
                                        firstName: $("input[name=firstname]").val(),
                                        lastName: $("input[name=lastname]").val(),
                                        position: $("input[name=position]").val(),
                                        intersted: $("input[name=interested]:checked").length > 0 ? 1 : 0
                                    };
                                    $.ajax({
                                        url:        "/register",
                                        type:       "POST",
                                        data:       form,
                                        success:    function(apiKey){
                                          if(apikey == 'error'){
                                            $('div#apikey').html("<p>failure registering, please try again!</p>");
                                          }else{
                                            $('div#apikey').html("<p>Your API Key: <span style='font-weight:bold'>" + apiKey +"</span></p><p>Please make sure you copy this key. You will need it to send commands to the sphero.</p>");
                                          }
                                        }
                                    });

                                });
                            });
                        }
                    })(window.jQuery);
                </script> 
              </body>
            </html>