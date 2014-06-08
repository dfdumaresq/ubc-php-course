<h1>{$title}</h1>
<h3>{$Explanation}</h3>

<blockquote>
    <b><address>Base Class and Extended Classes</address></b>

    <p>
        PHP 5 has a full object model, which makes it an excellent language for object-oriented programming.
        This allows us to represent the real world by describing its properties and behaviours in our code and
        provides us with a model we can easily conceptualize and interact with. Solutions then become apparent
        rather than proceeding from a strict enumeration of states.
        <br/>
        Here a base class and other classes that inherit from this base class
    </p>
    <p>
        Example:<br/>
        A non-profit company, <b>small¢hange™</b> enables financial transactions for small business
        vendors and charities located on the street without mobile devices.
    </p>
    <p>
        This example will use a base class of AgentProfile (as in sales and purchasing agents)
        and two extended classes, Vendor and Charity. (Buyer and Donor are also natural class extensions.) They
        will represent accounts in our smallChange system and as such may or may not have been 'validated.'
        An Is-Validated method will be demonstrated.
    </p>
    <p>

</blockquote>
<div id="objectContainer">
<div id="objectLHS">
    {$Agent_Info}
    {$Vendor_Info}

    {$Charity_Info}
    {$Author_Info}
</div>
<div id="objectRHS">
    {$Object_Image}
</div>
</div>