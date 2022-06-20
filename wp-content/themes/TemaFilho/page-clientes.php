<?php /* Template Name: Clientes */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    
    <?php
    
    global $wpdb;
    
    $sql = "SELECT * FROM {$wpdb->prefix}clientes";
    
    $clientes = $wpdb->get_results($sql);
    
    //var_dump($clientes);
    
    ?>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <?php
        
        foreach($clientes as $key=>$value){
            
            echo '<tr>';
                echo '<td>'.$value->id.'<td>';
                echo '<td>'.$value->name.'<td>';
                echo '<td>'.$value->email.'<td>';
            echo '</tr>';
            
        }
        
        ?>
    </table>
    
</div>

<?php get_footer(); ?>