<?php
/** index.php
 *
 */

include './nav.php';

$db_handle = connectToDatabase();
$events_html = createEventsOutput($db_handle);

$home = <<< HOME
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CryptoShow</title>
        <link rel="stylesheet" href="css/events.css">
    </head>
    <body>
        $nav

        <div class="content">
            <div class="events-container">
                <h1>Upcoming Events</h1>
                <div class="grid">
                $events_html
                    <!-- Event cards will be dynamically added here -->
                </div>
            </div>

            <!-- Modal for displaying event details -->
            <div id="eventModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Event Title</h2>
                    <p>Event Description</p>
                </div>
            </div>
        </div>

        <script src="js/events.js"></script>
    </body>
    </html>
HOME;
echo $home;


function connectToDatabase(): object
{
    $db_link = null;
    require_once 'mariadb-root-connect.php';

    try
    {
        $db_link = new PDO($pdo_dsn, $pdo_user_name, $pdo_user_password, array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    }
    catch (PDOException $error)
    {
        print 'Error!: ' . $error->getMessage() . '<br>';
        exit();
    }
    return $db_link;
}

function createEventsOutput($local_db_link): string
{
    $events_output = '';

    

        $query2 = 'use crytoshow_db;';
        $select_database = $local_db_link->query($query2);
        $query3 = 'SELECT * FROM event;';
        $stmt = $local_db_link->query($query3);
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($events as $event)
        {
            $events_output .= <<< EVENT
            <div class="event-card">
            <h3></h3>
            <p></p>
            <button class="button-view">View</button>
            </div>
            EVENT;
        }
    
    return $events_output;
}
