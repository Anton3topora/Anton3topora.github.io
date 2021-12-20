<?php
    session_start();
    $server='localhost';
    $path='root';
    $password='';
    $project_name='texts';
    $db = mysqli_connect($server, $path, $password, $project_name);
    $template = [
        'notes' => [],
        'is_search' => false
    ];
    if(isset($_POST['look'])){
        $template['is_search'] = true;
        $search = $_POST['look'];
        $sql_notes = "SELECT `text` FROM `notes`";
        $result = mysqli_query($db, $sql_notes);
        while($data = mysqli_fetch_assoc($result)){
            $template['notes'][] = $data;
        };
    }

?>
<?php if($template['is_search']): ?>
    <a href="/pages/zadanija/ad.php">назад</a>
    <?php if(!empty($template['notes'])): ?>
        <?php foreach($template['notes'] as $note): ?>
            <p style="border: 1px solid black; padding: 30px;">
                <?=$note['text']?>
            </p>
        <?php endforeach; ?>
    <?php else: ?> <div class = 'wrapper'><h3 style = 'font-size: 25px; margin-left: 40px'>ПОИСК НЕ ДАЛ РЕЗУЛЬТАТОВ</h3></div>;
    <?php endif; ?>
<?php endif; ?>

            
        
    
