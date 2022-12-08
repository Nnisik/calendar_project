<!DOCTYPE html>
<html>
    <head >
        <title>Calendare</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <header class="navbar">
                <button><</button>
                <div>
                    <p id="month-header">November 22</p>
                    <p id="today-info">Thursday 23</p>
                </div>
                <div>
                    <button>></button>
                    <a href="index0.php"><button>UP</button></a>
                </div>
            </header>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>mon</th>
                    <th>tue</th>
                    <th>wed</th>
                    <th>thu</th>
                    <th>fri</th>
                    <th>sat</th>
                    <th>sun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                </tr>
                <tr>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                </tr>
                <tr>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                </tr>
                <tr>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                </tr>
                <tr>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tbody>
        </table>
        <div class="bottom_panel">
            <div class="current_events">
                <p>Today Events</p>
                <div>
                </div>
            </div>
            <button id="new_events">+</button>
        </div>
    </body>
</html>