<h1>Receiving list</h1>
<table class = "table table-bordered">
            <tr>
                <th>Item Id</th>
                <th>Item Name</th>
                <th>On-Hand Quantity (Kg)</th>
                <th>Receiving Quantity (Kg)</th>
                <th>Price (C$)</th>
            </tr>
            {items}
            <tr> <td><a class="btn btn-default" role="button" href="/Receiving/edit/{id}">{id}</a></td>
                <td>{name}</td>
                <td>{qty_onhand}</td>
                <td>{qty_inventory}</td>
                <td>{price}</td>
            </tr>
            {/items}
        </table>
