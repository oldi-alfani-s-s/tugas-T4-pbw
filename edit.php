<form action="edit_user.php?id=<?php echo $user['id']; ?>" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>
    
    <label for="age">Umur:</label>
    <input type="number" id="age" name="age" value="<?php echo $user['age']; ?>" required><br>
    
    <label for="birthdate">Tanggal Lahir:</label>
    <input type="date" id="birthdate" name="birthdate" value="<?php echo $user['birthdate']; ?>" required><br>
    
    <label for="address">Alamat:</label>
    <textarea id="address" name="address" required><?php echo $user['address']; ?></textarea><br>
    
    <label for="phone_number">Nomor Telepon:</label>
    <input type="text" id="phone_number" name="phone_number" value="<?php echo $user['phone_number']; ?>" required><br>
    
    <label for="additional_info">Informasi Tambahan:</label>
    <input type="text" id="additional_info" name="additional_info" value="<?php echo $user['additional_info']; ?>"><br>
    
    <button type="submit" name="submit">Update</button>
</form>
