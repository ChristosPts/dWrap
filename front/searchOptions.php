  <form action="func/sorting.php" method="POST" >       
      <?php include 'front/catOptions.php';?> 
             <select id="dropdown" name="sortOption">
                     <option value="">Sort by</option>
                     <option value="Age">Age</option>
                     <option value="Views">Views</option>
                     <option value="Likes">Likes</option>
                     <option value="Random">Random</option>
               </select>
               
               <select id="dropdown" name="orderer">
                     <option value="desc">Order by</option>
                     <option value="asc">Ascending</option>
                     <option value="desc">Descending</option>
               </select>

            <button type="submit" name="submit"><i class="bi bi-search fa-2x "></i></button>
 </form>            