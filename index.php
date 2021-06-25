<?php

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse similique distinctio illo ratione quos fuga, eius, sed explicabo tempore cumque labore! Illum, pariatur. Unde deleniti ex temporibus quos voluptatum quasi est autem qui maiores modi? Beatae quibusdam dicta modi assumenda eaque, soluta autem exercitationem vel iure cum harum iusto aliquid minima qui, a quae. Distinctio, commodi illum sed vero eaque delectus quas est neque animi incidunt facere voluptatibus tempora. Repellendus, illo explicabo, voluptatem harum delectus nam ea neque quod est itaque iste, nemo impedit. Fugit nostrum repellendus quisquam magni aliquid, temporibus laborum dolorem non eaque ipsum totam blanditiis facilis praesentium quae magnam voluptatum ex in similique animi iure incidunt veniam, omnis expedita. Ea incidunt ipsum nemo! Sunt suscipit incidunt praesentium repudiandae quasi, libero quos officiis odit aliquid veritatis optio expedita numquam amet, vitae odio delectus magni. Aliquid, illo asperiores nesciunt vitae dolor dolorum minus! Illum, recusandae voluptate harum praesentium laborum id, fugit ut eos molestias odit eum dolor hic nemo autem illo est placeat. Quos molestias excepturi alias pariatur facere eveniet, aspernatur voluptatum adipisci eligendi.";

    $censoredText = str_replace(["ipsum", "totam", "illo", "quos"], "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>

        <h1>Testo completo</h1>

        <p> <?php echo $text ?> </p>

        <h1>Testo con parole censurate</h1>

        <p> <?php echo $censoredText ?> </p>


    </body>
</html>