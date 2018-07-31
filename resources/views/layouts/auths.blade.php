<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/lumen.css')}}">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


        <title>Social </title>

        
    </head>
<body>
    <div class="container" style="width:450px;">
        
<div class="card">
        <div class="card-body"> 
            <center>
                <img style="width:100px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAh1BMVEX///83Za80Y64wYa0lW6seWKoqXqwsX6wcV6kjWqo8abHp7fU5Z7Dg5vG/y+Lx9Pldf7v3+fzT2+txjsLw8/hUebi1w95KcrWWqtHDzuSLoszL1ehRd7d8lsZCbbPY3+2lttesvNq4xd+TqM9ricCdsNRjg72HnspvjMF6lcYASaQOUqcAT6ZCCA6DAAAMpklEQVR4nO2d55qzKBSAE5qSbnqZ1EmZbPb+r28FTCZRVCAImX18/+06n/EInA42GjU1NTU1NTU1NTU1NTU1NTU1NTU1NTX2iWJ8P0M1RNvpaTSYdQAhweY8P3R9P5BV+r3L5kYRgRDENAGAAcLhbNlr+34yK/T3A4QIaGYABOHN+jD2/YBv0juHCGale0gZoHB2+rsztj+HtEC8x1jizfxPztf2Essmp1zIcHDw/by69Jc0UBNPACnY/SkzskNERz4OIfM/I+OqiRTn5wuA0JPvR1ci+glN5OMyombP9+OX00NaCzANHny6Xr0aD2AC/Oypum2+NYAcgGaf6wPs3x1AAcRT35LksMY25IsBePSJhmP8pW8DcwmanzdTt6TcB9UA4L1viVIcQpvyMfDVt0wv7KwLGLtxs75vsX5ZViBgrFPJ0Ldgd660CgFjwg9ZjEdUkYCxiBffwjEGFq1EBjTwbxknVQoYW8aWb1f8631PtBiAVz7li2w6MnkihnOPEs6qHkEOGngTsPIpmhB8edI3E0cCxiLOvIh4rH4NPoAbD/n/H4cCxiJC51bjWp0nIwUEjkPGS1W+aL6IdOtSwLmtjIUO1KHt31cSLpUBwoUrAadeBGQiOqpRLTwJGBM6STSubt4EbDZvDoLiLrWS9zWl+lGMgFcB41GsWsSJ1byoCRWrm7VTX03Orcoq496Hpc9QoV0c+rMTz4Cwqkzq2KhAXwEAVeSGz7xrmTsAVBIvHp3F9OXAVgVR/8l5wFREYD895dVZk4DWlgVsK2oZ4MznsV23ydcyoAkgJIQgSsMb2UwmRR2XVkW0ajOuWV8GBgQhjBHszAbX5WnfG27bfPlHrpJUxGINdZr1ZdDoe3dYDNtjiVJrupmpcGJNwHbGlwGwyCCtHDl3yFpJI7sI4ej1L/rdbW9/Wl7PsyP7T1emM7SUf1tKcqMdfmV12H1fjht0C+MFGWubAIpcythRmAyaVgSU+tuirDfAJIilev1VduHkKGFMbDSlRFK9AX/Yta3EDSB8cbQcmcXQQhJ1Kdf9mBcSzhLbx6+sHAVaoPW2gN2cRyW8T2Ir0ZoBH96jI7v/vj7NTcxQbm+lg8icjbErPxa/WZXq5Zo2wrt5ZbMRztgVV8omGBVLUEb+nQHk3oxsjCl3ip0pm7eM4r5gIBCXQ+a/COFdZf/h+R0JYcE4AGH1vySDSJbsiitl806QUTSE8RrnWb2FLPYP2fJvO8oKwDfi/U7xnb/4H80k4wy5ezp3pGxC49Rbr2QQuFmQ/5Xw6jpulE1gnNEoK1Ika3wj2yTKfY2FYRgVR9dUIzkLkGEsnOfO/HLj0+MgG0S0Y5dkDkHhs0KCMOqcv/erw0Y9BEOGOZvv0p9IpofM8gGeY2irDyLfAU3Ol+nwHlzLtLQcMDOTsFjPcCh3maYyjSKkn6vlbALcGSx/ZRPIoxop2EjXDBWUvTB8crMpNJzSQwaXlHM5Hu66bJmoikiMNoRdVNYB5a6b1G4KM6WkbJ6856jbmx9JSBGb5T1Vt8gsKaWkzMiukTtSwiNQUTZiRkfD/eULYkT4lOAPLUugSAkNSjUqk7SZJC0aO9lyE1mUtkoYFbK67uhGgqeUOWFinxVzr8igMHxSuzcSnQPS1BPiq+Nb4UbcoqU1C9v8FMmMrQRisHFBsScBbPLfB6B87qjchjsPw9Rws7iojZVENLAXfVW3Way2SHrAgIhO86PoJ+iukYmaAeyrBmGAaBcUpSGDjESNyeei8FwHKtOBG5fUxOH3Pil5DfoWsdyheTwal6IvfdUiodFVeVt8uvdT6xmx5TVS0QhIu0FDvTVIREqNpfSVYN7fk5ORfIV7D2kLyFPoKg0EidnSQCMqEBNkLB2oJJujpC14dveSehnMuR8rvKDEu1JnqxGfJ/53+tmSX/5m18oizeRG7G1sXgcMsJ4EhUaedK2oFKkznceNh2fZGpy4yD0yJWUTsPmebn4k7H+WdyVr56OUnNLHQ/Bxaqyl/0Ys0/JYk8HTkC+tZXHA+A/zKUob6rSTNVo9iIkx6srXriieKCkbkcEa3d9UgEI42m+VHgh8aUoYaGVYREDfGEmfIvF6lF4ZT25FHcAOkaKt6/TXyMkV2dOvaDo1Y71sLgj4v8qZiiLHoOTZNBGb8NtbCNbT15BxUaIYdCUcaqaQEv9bngMWCQ01ZQP+ZXN6+OqgtKcjUqb5tCXUTOYm99/KB1GYk25ZGAUJvc2WqZInO9EuREW59+Qf/+hJuNJNV1PhNOWMkyieFCkbSDAazFev7nO0+o6lU1MJRLOOqC1h4n/nmGahyiO5+IBLd0pJ19ieBoSqKzzdEFh3lt6jiLxBxPz3s4lVJh087lL1MV65+oeUT80nqGZsIateF5P437nNQvzqi1FjBgGM9qkni7UKICxw/tYqemjHhznGu4ikPCKr0zTv6b7HbQFB4WY9TUt3WHeYVhHNo3pOh67Bj/Srm4FobcmLnEUyjHnnMKAoe7pnf3HZ4PtJYfw8rLGW46gbWjRUTz18Ikl65gyiSGhEBIeT+SqV+otWy6/w5RRQzFamTtOufq7tS1/CQLzGvEBJuKfDdIdPtJp/0YzOFIlIjfpjqN2R8aNfoQZILHZJnQawqoukPjSMLYL8kEwx59WXon7jkGK29IWkeJAKLblSuaaVSqx19scQ51sEvkmtr7pYDGqkZY6uFJH/fsqPxn4Y3VyyRwa3p9cOLj48C/Cylmo/B9Lf7qVR+Hv6HTEReZ1GeCrzRbY6e7i0QoXjFUWaTrFwYdIYZSDgo42OEELJeTeUG+G54rgIA6BUJjWqkGqlMe4I56yxz3gqMe3eZSa0rWqzFN+jNlbJ6huVD5Vz3s/AHM+iv1huKAqgmEyq/QvCe1OJnI0avyKjXhicbU+KDd4EJwZPNGYqGwERksizlM8keRJdjHq2Ujm9aHiaxOb8906iAqDs9Yrm0dKUt1mNu3EwGsSn/Z3b3TlWOKlSi5jGyov8xt5Iu6wv/mbYE2XWWkiZZYq6+5+Qysy5qGNEqu1AADB9XHIsY97qL0We4C0Fbc5nUGDO+b2LWwIfgODG1W9xPpia7u5WS1NLgEXBuah850UgzwBIyTVx1Atr3cBQQMX0nzaYezmltRaI0E/v4TIUOZGGeobftpLtS0Q4yaOCNQAgoqPes0e0L5im4RsbZhWmkgH3cmPezSEiPy/iRYdBwRAG2tH9E2qJeF0Smynv5YcoPL6I1xheSOFXMkw7LwXVDGKykyerPeLJeT68iNedN0typkllz5Rq9vYkkUAq9oPoNpi+JHDGu1lY5rEZdJm8Uk27Pc3UceJgcrB/mW796SBUiPDpu4e5GAXCpQAobk7v4oWTfaqWNkJKG6ahYevsE9Xs7UnKKOzmIBZv9yre8IKoYkbfxiZSxc45PZKGt0aL4llKvO68pV6P0c8DS0h309kh2Y7VTuUCxvsvlcV3x8LmQ4Zai4Eukp08Ue+M9c6HsbXRuZp5mlYRq3WhYZdhbbN6aXXaiKR9I/mJb4D1uj+ab4SFWSo5HQqgu4Zpx4bdIBT9vYEFJKdivA9oMX3a3c1uBnWumJvVozArOT8JBOvrRvnjZWnQe/5oGpX2R31A+rACDayfMfQh55g9AE3r50R9xll0d4Bu54UKyrtXXBBWcrCgy/O7S7CsZR64O4O9BPLW9vQCog85cw9UcRpdImLrE0QU5e+K6H+CiDZOpCkQseldRL4/qkLawLOI5M2TTBREhF5FtJB5+mwRYcfFp8o8iggcfeVi7EujAuLqMx59jfMcbApofoSJNtHMg48KJJ0sFVLxx8hk3Jx93UKguk/eGtUETEX8uI0X3XzZ4pW1y7Ohw517AeOo352I2NO3rFUbRd8X0Nvn8yx9p7pUwIqSFiqsbg5EpDaKhMa0W5W7N34FjN2bc8VWA3sWsMH0TZUz1Z+SeaJX4cHPfuxghm5VqQ3gw5OREk2qWYzYsbNdxKUC4w/Rx3x6nLFXO85JA/+fc06xDexaRjLx/0nuFNHZpieObX9kxQone5bxQ6xEhmHTzkwN4EfpmGeiqw2Fg48ftwSfWJB3EzjQ9keAbBNdw7c8HDRz/GljA4Yz86kKQ0/5Ck0OHcOv7OHBh1n5fHZUfzkCBD7IDy1n16Ra6xEg+OEaJsvirN7RDBDZfbKJyKN92mCV2Qrp5s+N34PhspPeKZsWj+Djn1p/Wbr7M83ZUwoCdEvvtvijDHejFkVPYgL26T3cuvRcFOZd0e6dflq3EFOMw5BM1rvF/2LwMrS33W63ki/B1tTU1NTU1NTU1NTU1NTU1Pxl/gNMPsuxzf8nIAAAAABJRU5ErkJggg==" class="img img-responsive" alt="">
            </center>
            <hr>
       @yield('content')
       
     </div>
    </div>        
    </div>
</body>
</html>