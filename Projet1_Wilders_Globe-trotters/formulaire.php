<?php include 'layout/_header.php';
    require 'fonctionformulaire.php';
?>

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAsfzu1_3sq6TTPMwWxWUt4GptuOqj8y1WcA&usqp=CAU" id="imgContact" alt="imgContact"/>
    
        <form id="formulaire" method="POST" action="formulaire.php">
            <div>
                <label for="name" class="form-label">Nom:</label><br />
                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom ici" ><br /><br />
            </div>
            <div>
                <label for="firstname" class="form-label">Prénom:</label><br />
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom ici" ><br /><br />
            </div>
            <div>
                <label for="email" class="form-label">Email:</label><br />
                <input type="text" id="email" name="email" class="form-control" placeholder="name@example.com" ><br /><br />
            </div>
            <div>
                <label for="message" class="form-label">Message:</label><br />
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message ici" ></textarea><br /><br />
            </div>         
            <?php
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    ?>
                    <div class="alert" role="alert">
                        <?php echo $error; ?><br />
                    </div>
            <?php
                }
            }
            ?>
            <div>
                <button class="submit" type="submit">Envoi</button>
            </div>
        </form>
 


<?php include 'layout/_footer.php'; ?>
