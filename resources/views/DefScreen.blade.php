<!doctype html>
<html lang="en">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
<div style="alignment: left" >
    <table border="1px solid red" width="400px" hieght="500px">
        <th>
            إسم المنتج
        </th>
        <th>
            product name
        </th>
        <th>
            price
        </th>
        @foreach($pro as $pr)
            {
            <tr>
                <td>{{$pr->NameInArabic}}</td>
                <td>{{$pr->NameInEnglish}}</td>
                <td>{{$pr->Price}}</td>
            </tr>
            }
        @endforeach
    </table>
</div>
<br>
<br>

<div style="alignment: right">
    <form method="" action="" enctype="">
        @csrf
        <lable>Customer Name </lable>
        <input type="text" name="cst"><br>
        <lable>Choose the product</lable>
        <select  name="proname" class="prodsNames">
            <option>
                -please select-
            </option>
            @foreach($pro as $pro)
                <option value="{{$pro->Price}}">
                    {{$pro->NameInEnglish}}
                </option>
            @endforeach

        </select><br>
        <lable>Product price</lable>
        <input type="text" id="price-display" readonly="readonly" class="prod_pric"><br>
        <label>Quantity</label>
        <input type="text" name="Qnt"><br>
        <input type="button" name="calc" value="calculte"> <label name="result" id="result"></label>L.E<br>
        <input type="submit" name="submit">

    </form>
</div>

<!--<script>


    $(document).ready(function () {
        $(document).on('change','.prodsNames',function (){
           console.log('changed');
        });

    });
</script>-->
</body>
</html>

