<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <form>
            <fieldset>
                <div>
                    <label for="aligned-name">Username</label>
                    <input type="text" id="aligned-name" placeholder="Username" />
                    <span>This is a required field.</span>
                </div>
                <div>
                    <label for="aligned-password">Password</label>
                    <input type="password" id="aligned-password" placeholder="Password" />
                </div>
                <div>
                    <label for="aligned-email">Email Address</label>
                    <input type="email" id="aligned-email" placeholder="Email Address" />
                </div>
                <div>
                    <label for="aligned-foo">Supercalifragilistic Label</label>
                    <input type="text" id="aligned-foo" placeholder="Enter something here..." />
                </div>
                <div>
                    <label for="aligned-cb" class="pure-checkbox">
                        <input type="checkbox" id="aligned-cb" /> I&#x27;ve read the terms and conditions
                    </label>
                    <button type="submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>
