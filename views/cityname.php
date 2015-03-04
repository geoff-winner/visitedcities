<html>
    <head>
        <title>What cities have you visited?</title>
    </head>
    <body>
        <h1>What cities have you visited?</h1>
        {% if cities is not empty %}
            <p>Here are all the cities you have visited</p>
                <ul>
                    {% for city in cities %}
                        <li>{{ city.getCityName }}</li>
                    {% endfor %}
                </ul>
        {% endif %}

        <form action='/cityname' method='post'>
            <label for='city'>City</label>
            <input id='city' name='city' type='text'>

            <button type='submit'>Add City</button>
        </form>
        <form action='/delete_cities' method='post'>
            <button type='submit'>Delete These Cities</button>
        </form>
    </body>
</html>
