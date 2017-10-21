<?php
    
    require $sitePath . '/database/connect.php';


    # The function names probably should have better names 

    function sshotDESection()
    {
        ### DE Section 

        # Query for when the desktop matches AND SRC is set
        $sshotDESrcQuery = "SELECT * 
                            FROM sshots 
                            WHERE ssde = '$localdename' AND 'src' IS NOT NULL";
        

        $sshotDESrcResult = mysqli_query($conn, $sshotDESrcQuery) or ('Error querying database');
        $sshotDESrcDisplay = mysqli_fetch_assoc($sshotDESrcResult);

        # Query for when the desktop matches AND HREF is set
        $sshotDEHrefQuery = "SELECT * 
                            FROM sshots 
                            WHERE ssde = '$localdename' AND 'href' IS NOT NULL";
        
        $sshotDEHrefResult = mysqli_query($conn, $sshotDEHrefQuery) or ('Error querying database');
        $sshotDEHrefDisplay = mysqli_fetch_assoc($sshotDEHrefResult);


        srcCheck($extraTest);

    }
   

    function sshotDistroSection()
    {

     ## DistroSection 

        # Query for when the desktop matches AND SRC is set
        $sshotDistroSrcQuery = "SELECT * 
                                FROM sshots 
                                WHERE $extraTest AND 'src' IS NOT NULL";

        $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
        $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);

        # Query for when the desktop matches AND HREF is set
        $sshotDistroHrefQuery = "SELECT * 
                                FROM sshots 
                                WHERE $extraTest AND 'href' IS NOT NULL";                 

        $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
        $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);


        // Pass to the check function ... Display function call is INSIDE the check function 
        srcCheck($extraTest);

    }
   
?>