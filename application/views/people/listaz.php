<!--a view kialakítása a listák megjelenítéséhez-->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <title>Autók listája</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo base_url(); ?>api/People/index_get">People/Emberek listája</a></li> <!--szükséges a base url, hogy hol keressük, majd a controller neve/függvény neve (ugyanide mutat) a köv. / után a paraméter lenne-->
           
        </ul>        
    </nav>
    <h1>People/Emberek</h1>
    <!--ha van változó, az people nem üres, kiírunk egy táblázatot-->
    <?php if (isset($adatok)): ?>
        <?php if (!empty($adatok)): ?>
            <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                              
                    <tr>
                        <td><?php echo $adatok['name'] ?></td>
                        <td><?php echo $adatok['email'] ?></td>
                        <td><?php echo $adatok['age'] ?></td>
                    </tr>
               
            </tbody>            
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>
            </tfoot>
            </table>
        <?php else: ?>
            
        <?php endif; ?>
    <?php else: ?>
        
    <?php endif; ?>
</body>
</html>