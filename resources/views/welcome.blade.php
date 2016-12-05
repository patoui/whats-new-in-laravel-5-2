<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Invite Up to 5 People</h1>
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label" for="email-1">Email #1:</label>
                    <input type="text" id="email-1" name="email[]" class="form-control" value="{{ old('email.0') }}">
                    @if ($errors->has('email.0'))
                        <span class="help-block">{{ $errors->first('email.0') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-2">Email #2:</label>
                    <input type="text" id="email-2" name="email[]" class="form-control" value="{{ old('email.1') }}">
                    @if ($errors->has('email.1'))
                        <span class="help-block">{{ $errors->first('email.1') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-3">Email #3:</label>
                    <input type="text" id="email-3" name="email[]" class="form-control" value="{{ old('email.2') }}">
                    @if ($errors->has('email.2'))
                        <span class="help-block">{{ $errors->first('email.2') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>
