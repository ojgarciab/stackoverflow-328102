<?php
require __DIR__.'/vendor/autoload.php';

$html2pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'es');
$content = '
<html>
<head>
<style>
table {
  width: 190mm;
  margin: 5mm;
}
td {
  border: 1px solid #e2e2e2;
  padding: 5px; 
  max-width: 25%;
  word-wrap: break-word;
  font-size: 8px;
}
img {
  width: 25%;
}
b {
  margin: 8px;
}
</style>
</head>
<body>
  <table border="1">
    <tr>
      <td style="width: 20%;">Incidencias</td>
      <td style="width: 80%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt risus vel nisi pharetra, quis finibus mauris porttitor. In porta porttitor condimentum. Donec quam ligula, facilisis eget odio sit amet, malesuada consequat lacus. Nunc at elit scelerisque, vehicula ante at, ullamcorper lacus. Morbi scelerisque mauris quis ligula ornare, et facilisis leo viverra. Cras sagittis, risus eu laoreet consequat, quam lacus viverra ipsum, ac viverra sem velit et justo. Praesent aliquet, nulla id posuere porta, ex sem semper ipsum, in tincidunt tellus risus nec eros. Proin pulvinar purus eget sem bibendum, rutrum tristique sapien faucibus. Sed ultricies ligula in accumsan placerat. Ut erat libero, commodo et mauris non, ullamcorper sodales dui. Praesent at risus euismod, vestibulum ante vitae, consequat dui. In non dignissim ipsum. Duis elit urna, luctus at ultrices faucibus, rutrum quis orci. Cras posuere mi at venenatis eleifend.</td>
    </tr>
    <tr>
      <td style="width: 20%;">Acciones correctoras</td>
      <td style="width: 80%;">
        <p>Suspendisse vitae justo lacus. Vestibulum aliquam nibh eget odio pulvinar, quis sollicitudin ligula ultricies. Phasellus mattis iaculis enim finibus cursus. Duis convallis dictum risus ac congue. Maecenas accumsan, magna quis porttitor egestas, urna ipsum porta nisl, non semper turpis nisl eu dui. Suspendisse aliquet sed sem eu dapibus. Etiam laoreet nisl tellus, blandit ultrices lectus cursus vel. Nulla pharetra tempus tellus iaculis vehicula. Vivamus neque tellus, faucibus a ligula et, egestas efficitur leo. Fusce efficitur velit nec turpis porttitor euismod. Duis quis lorem dictum, tempor est id, semper nibh. Morbi feugiat magna nec ante sagittis volutpat. Ut id vulputate nunc, sit amet ullamcorper enim. Phasellus sollicitudin arcu vel sem maximus, vel bibendum nunc sagittis. Aenean sagittis quis nisi id ornare.</p>
        <p>Donec gravida vulputate magna, quis consectetur est faucibus non. Nam tellus dolor, porta eget faucibus vel, imperdiet in ex. Donec sed elit auctor, luctus mi id, auctor dui. Nam convallis, augue sit amet malesuada consequat, nulla urna convallis lorem, sit amet dictum elit orci et eros. Pellentesque nec magna vel nisl condimentum interdum. Sed euismod gravida blandit. Duis convallis, risus sed tincidunt mollis, nisi nibh lobortis sapien, eu sodales nisl risus eu libero. Maecenas suscipit feugiat rutrum. Nullam fringilla faucibus tristique. Cras sed eleifend sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque lobortis condimentum quam. Proin sit amet tortor tincidunt, bibendum mi sit amet, ultricies magna. Nullam accumsan orci sit amet nisl maximus, a pellentesque orci vulputate.</p>
      </td>
    </tr>
  </table>
</body>
</html>
';
$html2pdf->writeHTML($content);
$html2pdf->output();
