<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            max-width: 600px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }

        div+div {
            margin-top: 1em;
        }

        label {
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,
        textarea {
            font: 1em sans-serif;
            width: 300px;
            box-sizing: border-box;
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            border-color: #000;
        }

        textarea {
            vertical-align: top;
            height: 5em;
        }

        .button {
            padding-left: 90px;
        }

        button {
            margin-left: .5em;
        }
    </style>
</head>

<body>

    <form action="index_controller.php" method="post">
        <div>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" id="id" name="name" required>
        </div>

        <div>
            <label for="class">Class</label>
            <input type="text" id="id" name="class" required>
        </div>

        <div>
            <label for="mobile">mobile</label>
            <input type="text" id="id" name="mobile" required>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>