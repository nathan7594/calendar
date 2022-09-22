<?php
function display_event($event){
    $event['date'] = strftime("%d-%m-%Y", strtotime($event['date']));
    echo "The '$event[name]' event will take place on $event[date] in $event[location]".PHP_EOL;
    

}
display_event ([
    'name' => 'RDV Client Smith',
    'date' => '20191231',
    'location' => 'Nantes'
    ]) ;
function display_events_by_month ($event){

    foreach ($event as $valeur){ 
        $valeur['date'] = strftime("%d-%m-%Y", strtotime($valeur['date']));
        
        
        echo "The '$valeur[name]' event will take place on $valeur[date] in $valeur[location]".PHP_EOL;
       
        
    }
    foreach($event as $time){
        $time=strtotime($valeur['date']);
        //arsort($time);
        echo $time."\n";
    }
}   
display_events_by_month ([
    [
    'name' => 'Reunion Client',
    'date' => '20200505',
    'location' => 'Nantes'
    ] ,
    [
    'name' => 'Affinage sprint 2',
    'date' => '20200705',
    'location' => 'Nantes'
    ] ,
    [
    'name' => 'RDV Pro',
    'date' => '20200705',
    'location' => 'Paris'
    ] ,
    [
    'name' => 'Brainstorming',
    'date' => '20190705',
    'location' => 'Lyon'
    ] ,
    [
    'name' => 'Demonstration client',
    'date' => '20200205',
    'location' => 'Lille'
    ]
    ]) ;
    // Je n'ai pas réussis a récupérer les dates !
    //Utiliser la fonctions strtotmie Pour ensuite pouvoir les trier dans l'ordre 
    // Je ne sais pas si c'étais une bonne idée ...