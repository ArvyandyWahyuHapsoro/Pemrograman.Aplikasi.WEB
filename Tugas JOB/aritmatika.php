<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.min.css">
    <title>Pemakaian Operator Aritmatika data PHP</title>
    <style>
        #footer {
            background: #F8F9FA;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #808080;
        }
    </style>
</head>

<body>
    <div id="footer">
        Copyright &copy; Arvyandy Wahyu Haspsoro (MI-P.18.1K) Universitas Stekom Kendal <?php echo date("Y"); ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <form method="post" action="OpAritmatiaka.php">
        <h2>Operator Aritmatika Oleh : Arvyandy Wahyu Hapsoro</h2>
        <table width="50%" border="1">
            <tr>
                <td with="30%">
                    <div align="center">Operand Kiri</div>
                </td>
                <td with="20%">
                    <div align="center">Operator</div>
                </td>
                <td with="30%">
                    <div align="center">Operand Kanan</div>
                </td>
                <td>
                    <div align="center">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <input type="text" name="operand1">
                    </div>
                </td>
                <td>
                    <div align="center">
                        <select name="operator">
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="*"> * </option>
                            <option value="/"> / </option>
                        </select>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <input type="text" name="operand2">
                    </div>
                </td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>