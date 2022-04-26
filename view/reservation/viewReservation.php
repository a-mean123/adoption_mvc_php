<h1 id="bookTitle"> Book Your Pet Stay!</h1>
<form name="form1" method="POST" action="index.php?controller=reservation&action=created" id="form1" enctype="multipart/form-data">
   <div class="monFormulaire">
   <div>
       <fieldset>
           <legend class="TitlesOfForm"><h3>Your Contact Information</h3></legend>
           
               <label for="firstname">Pseudo name:</label>
               <input  class="firstname" type="text" name="pseudo_proprietaire" id="firstname" required autofocus  />
        <br/>
     
               <label for="emailadress">Email adress:</label>
               <input class="email" type="email" placeholder="azerty@gmail.com" name="email_proprietaire" id="emailadress" required onChange="message1(document.contact_information.emailadress);"/>
        <br/>
               <label for="homeadress">Adress:</label>
               <input class="adress" type="text" value="Where do you live?" name="adresse" id="homeadress" required/>
        <br/>  
               <label for="phone">Phone number:</label>
               <input class="phone" type="tel" name="num_tel" id="phone"  />
       </fieldset>
   </div>



   <div>

         <p class="TitlesOfForm"> <strong>image </strong> </p>
       <label id="labelcat" for="dog"> Select image </label>
       <input  type="file" name="image"  />
       
       <p class="TitlesOfForm"> <strong>What is your pet type?</strong> </p>
       <label id="labelcat" for="dog"> Dog </label>
       <input class="check" type="checkbox" name="typeAnimal" id="dog" value="dog" checked />
       <label id="labelcat" for="cat"> Cat </label>
       <input class="check" type="checkbox" name="typeAnimal" id="cat" value="cat"/>
       <p class="TitlesOfForm"> <strong>How many? </strong></p>
    <span>
       <label id="labelcat" for="Cats">Cats:</label>
       0<input class="range" type="range" name="nb_chats" id="Cats" value="3" min="0" max="10"/>10
    </span>
    <span>
       <label id="labelcat" for="Dogs">Dogs:</label>
       0<input class="range" type="range" name="nb_chiens" id="Dogs" value="3" min="0" max="10"/>10
    </span>
   </div>
   
   <div>
    <p class="TitlesOfForm"> <strong>What is the breed of your pet?</strong></p>
    <label  id="labelcat" for="Cat1">Cat:</label>
    <select class="selection" name="race_chat" id="Cat1" onChange="alert('Your choice is'+' '+document.pet.Cat1[document.pet.Cat1.selectedIndex].value);">
        <optgroup label="Long Coat">
            <option value="American Bobtail Cat Breed">American Bobtail Cat Breed</option>
            <option value="Birman Cat Breed">Birman Cat Breed</option>
            <option value="Himalayan Cat Breed">Himalayan Cat Breed</option>
            <option value="Japanese Bobtail Cat Breed">Japanese Bobtail Cat Breed</option>
            <option value="LaPerm Cat">LaPerm Cat</option>
            <option value="Maine Coon Cat Breed">Maine Coon Cat Breed</option>
            <option value="Manx Cat">Manx Cat</option>
            <option value="Munchkin Cat">Munchkin Cat</option>
            <option value="Norwegian Forest Cat Breed">Norwegian Forest Cat Breed</option>
            <option value="Oriental Cat Breed">Oriental Cat Breed</option>
        </optgroup>

        <optgroup label="Medium Coat">
            <option value="Abyssinian Cat">Abyssinian Cat</option>
            <option value="American Bobtail Cat Breed">American Bobtail Cat Breed</option>
            <option value="American Wirehair Cat Breed">American Wirehair Cat Breed</option>
            <option value="Balinese-Javanese Cat Breed">Balinese-Javanese Cat Breed</option>
            <option value="Bengal Cat">Bengal Cat</option>
            <option value="Birman Cat Breed">Birman Cat Breed</option>
            <option value="Chartreux Cat Breed">Chartreux Cat Breed</option>
            <option value="Egyptian Mau Cat">Egyptian Mau Cat</option>
            <option value="Munchkin Cat">Munchkin Cat</option>
            <option value="Ragdoll Cat Breed" selected>Ragdoll Cat Breed</option>
        </optgroup>

        <optgroup label="Short Coat">
            <option value="Bombay Cat">Bombay Cat</option>
            <option value="American Shorthair Cat">American Shorthair Cat</option>
            <option value="Cornish Rex Cat Breed">Cornish Rex Cat Breed</option>
            <option value="Burmese Cat">Burmese Cat</option>
            <option value="Egyptian Mau Cat">Egyptian Mau Cat</option>
            <option value="Devon Rex Cat Breed">Devon Rex Cat Breed</option>
            <option value="Exotic Shorthair Cat Breed">Exotic Shorthair Cat Breed</option>
            <option value="Japanese Bobtail Cat Breed">Japanese Bobtail Cat Breed</option>
            <option value="Havana Brown Cat Breed">Havana Brown Cat Breed</option>
            <option value="European Burmese Cat Breed">European Burmese Cat Breed</option>
            <option value="Autre">(Autre)</option>
        </optgroup>
    </select>
   </div>
   <div>
       <label id="labelcat" for="Dog1">Dog:</label>
       <select class="selection1" name="race_chien" id="Dog1"  onChange="alert('Your choice is'+' '+document.pet.Dog1[document.pet.Dog1.selectedIndex].value);">
       <optgroup label="Small Size">
           <option value="Affenpinscher">Affenpinscher</option>
           <option value="American Hairless Terrier">American Hairless Terrier</option>
           <option value="Australian Terrier">Australian Terrier</option>
           <option value="Basenji">Basenji</option>
           <option value="Bedlington Terrier">Bedlington Terrier</option>
           <option value="Bichon Frise">Bichon Frise</option>
           <option value="Border Terrier">Border Terrier</option>
           <option value="Boston Terrier">Boston Terrier</option>
           <option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
           <option value="Chihuahua">Chihuahua</option>
       </optgroup>

       <optgroup label="Medium Size">
           <option value="Afghan Hound">Afghan Hound</option>
           <option value="Airedale Terrier">Airedale Terrier</option>
           <option value="American Bulldog">American Bulldog</option>
           <option value="American Cocker Spaniel">American Cocker Spaniel</option>
           <option value="American Eskimo Dog">American Eskimo Dog</option>
           <option value="American Water Spaniel">American Water Spaniel</option>
           <option value="Australian Cattle Dog">Australian Cattle Dog</option>
           <option value="Basset Hound">Basset Hound</option>
           <option value="Belgian Shepherd Dog">Belgian Shepherd Dog</option>
           <option value="Border Collie">Border Collie</option>
       </optgroup>

       <optgroup label="Large Size">
           <option value="Alaskan Malamute">Alaskan Malamute</option>
           <option value="American Foxhound">American Foxhound</option>
           <option value="American Pit Bull Terrier">American Pit Bull Terrier</option>
           <option value="Australian Shepherd">Australian Shepherd</option>
           <option value="Beauceron">Beauceron</option>
           <option value="Malinois" selected>Malinois</option>
           <option value="Sheepdog">Sheepdog</option>
           <option value="Tervuren">Tervuren</option>
           <option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
           <option value="Bloodhound">Bloodhound</option>
           <option value="Autre">(Autre)</option>
       </optgroup>
    </select>
   </div>

   <div>
     <p class="TitlesOfForm"><strong>How old is (are) your pet(s)?</strong></p>
     <input class="check" type="checkbox" name="age" value="Less6M" id="Less6M">
     <label for="Less6M"><strong>Less than 6 months</strong> </label>
    <br/>
     <input class="check" type="checkbox" name="age" value="6M_1Y" id="6M1Y">
     <label for="6M1Y"><strong> 6 months- 1 year</strong></label>
    <br/>
     <input class="check" type="checkbox" name="age" value="1_3Y" id="1_3Y">
     <label for="1_3Y"><strong> 1-3 years</strong></label>
    <br/>
     <input class="check" type="checkbox" name="age" value="4_10Y" id="4_10Y">
     <label for="4_10Y"><strong> 4-10 years</strong></label>
    <br/>
     <input class="check" type="checkbox" name="age" value="More10" id="More10">
     <label for="More10"><strong> More than 10 years</strong></label>
   </div>
    <br/>
   <div >
       <label id="label_in_out" for="In"><strong>Check In:</strong></label> </br>
       <input name="date_arrivee" class="date" type= "date" size="30" min="2022-01-01" max="2023-12-31"/>
   <br/>
       <label id="label_in_out" for="Out"><strong>Check Out:</strong> </label> </br>
       <input name="date_depart" class="date" type="date" size="30" min="2022-01-02" max="2023-12-31">
   </div>


    <fieldset>
    <legend class="TitlesOfForm1"><h3>Additional Services</h3></legend>
     <p class="title">Would you like: </p>
     <span>Food:</span> <input class="check" type="radio" name="food" id="bring" value="bring"/>
     <label for="bring">To bring your own food</label>
     <input class="check" type="radio" name="food" id="feed" value="feed"/>
     <label for="feed">Us to feed him</label>
    <br/>
    <span>Walk(Dogs only): </span> <input class="check" type="radio" name="walk" id="yes" value="yes"/>
    <label for="yes">Yes</label>
    <input class="check" type="radio" name="walk" id="no" value="no"/>
    <label for="no">No</label>
    <br/>
    <span>Bath:</span>  <input class="check" type="radio" name="bath" id="yes" value="yes"/>
    <label for="yes">Yes</label>
    <input class="check" type="radio" name="both" id="no" value="no"/>
    <label for="no">No</label>
        
    <div>
    <details open> 
        <summary><strong>Important!</strong></summary>
    <label for="tell_us">Do you have something important to tell us about your pet? (illness, food preferences ...)</label>
    <br />
    <textarea name="commentaire" id="tell_us" rows="5" cols="59" maxlength="100" minlength="2">
    </textarea> 
    </div>
    </details>
    <input class="button" type="submit" name="book" id="book" value="Book Now!" onClick="Submit();"/>
    <input class="button" type="reset" value="Cancel" />
    </fieldset>
    </div>
</form>