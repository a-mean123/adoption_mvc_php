
    <h1 id="adoption"> We are waiting for you To Save US!</h1>

<table>
    <caption><strong>these pets need you </strong>&#129303;  </caption>
 
    <thead> <!-- En-tête du tableau -->
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
    </thead>
 
    <tfoot> <!-- Pied du tableau -->
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
    </tfoot>
 
    <tbody> <!-- Corps du tableau -->
  
        <?php 
            foreach($tab_p as $c){
                $id = $c->getId();
                $img = $c->getImage();
                echo "<tr>";
                echo "<td class='w-25'> <img class='w-25' src='assets/images/$img' height='100' width='100'> 
                <br>
                <button>adopt me</button> 
                </td>"; 
                echo "<td>".$c->getNom()."</td>"; 

                echo "<td>".$c->getRace()."</td>"; 
                echo "<td>".$c->getAge()."</td>"; 
        
                echo "<td>".$c->getSexe()."</td>"; 
                echo "</tr>";

            }
        
        ?>
      
    </tbody>
 </table>


 
 <h1 id="adoption"> You have an animal for adoption ?</h1>

<form  enctype="multipart/form-data" name="AddAnimal" method="POST" action="index.php?controller=adoption&action=created" id="AddAnimal" >
     <table>
        <caption><strong>Insert your animal's informations here: </strong>&#129303;  </caption>
    
            <tr>
                <th>Picture</th>
                <th>Type</th>
                <th>Breed</th>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
            </tr>
            <tr>
                <th><input type="file" name="image" id="image" ></th>
                <th><input type="text" name="typeAnimal" id="typeAnimal" ></th>
                <th><input type="text" name="race" id="race" ></th>
                <th><input type="text" name="nom" id="name" ></th>
                <th><input type="text" name="age" id="age"></th>
                <th><select name="sexe" id="sex"><option value="Female">Female</option><option value="Male">Male</option></select></th>
                <th><input  type="submit" id="send" name="send" value="Send"  /></th>
            </tr>
            </table>
</form> 