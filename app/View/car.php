<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
    <header>
        <nav class="d-flex justify-content-around">
            <?php
                foreach($data['menu'] as $object){
                    print '<a class="nav-bar" href="/' . CONFIG['site_path'] . $object->link . '">' . $object->name . '</a>';
                }
            ?>
        </nav>
    </header>
    <main class="d-flex align-items-center flex-column">
        <h1>Car page</h1>
        <section class="d-flex justify-content-around">
            <aside>
               <form method="POST">
                    <select name="color">
                      <option value="raudona">Raudona</option>
                      <option value="juoda">Juoda</option>
                    </select>
                    <select name="fuel">
                      <option value="benzinas">Benzinas</option>
                      <option value="dyzelinas">Dyzelinas</option>
                    </select>
                    <button type="submit" name="select">Select</button>
                    <button type="submit" name="allCars">All Cars</button>
               </form>
            </aside>
            <section class="d-flex justify-content-around">
                <?php foreach($data['cars'] as $car):?>
                    <div class="card" style="width: 10rem;">
                      <img src="<?= $car->img ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text"><?= $car->text; ?></p>
                      </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>