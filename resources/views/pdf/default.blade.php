<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: DejaVu Sans, sans-serif; }
    .header { text-align: center; margin-bottom: 20px; }
    .content { margin: 0 40px; }
    .signature {
      position: absolute;
      top: 0;
      left: 0;
      width: 200px;
    }
  </style>
</head>
<body style="background-color: red;">
  <div class="content">
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
    Text behind the signature. <br />
  </div>

  @if(!empty($signaturePng))
    <img
      src="{{ $signaturePng }}"
      class="signature"
      alt="Podpis klienta"
    />
  @endif
</body>
</html>
