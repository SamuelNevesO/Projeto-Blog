<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog::Samuel</title>
    <script src="https://cdn.tiny.cloud/1/t2fllk5ejd8h0mqrde61blgk9a8fyvndz2vujgm4crbwke7e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <main>

    <header>
        <a href="view2.php">Retornar</a>
    </header>
        <div class="container">
        <h1>INSERIR</h1>
            <form action="envia.php" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Título</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Título">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data</label>
            <input type="date" class="form-control" name="data" id="exampleFormControlInput1" placeholder="Data">
            </div>


            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Texto Descritivo</label>
            <textarea name="description">
               </textarea>
            <script>
                tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ]
                });
            </script>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="image" aria-label="file example" required>
                <div class="invalid-feedback">Nenhum arquivo inserido</div>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="cat-1">
            <label class="form-check-label" for="inlineRadio1">Notícias</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="cat-2">
            <label class="form-check-label" for="inlineRadio2">Times</label>
            </div>
            <div class="mb-3">
            <button class="btn btn-primary" type="submit">Publicar</button>
            </div>
            </form>
        </div>
    </main>
</body>
</html>