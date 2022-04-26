<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/catalog">
        <html>
            <head>
                <title>Store</title>
            </head>
            <body>
                <h2>Store Catalog</h2>
                <table border="1 px">
                    <tr bgcolor="lightblue">
                        <th>Name</th>
                        <th>Price</th>
                        <th>Model</th>
                        <th>Warrenty</th>
                        <th>Weight</th>
                    </tr>
                    <xsl:for-each select="product">
                    <tr bgcolor="black" style="color:white;">
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="price"/></td>
                        <td><xsl:value-of select="model"/></td>
                        <td><xsl:value-of select="warrenty"/></td>
                        <td><xsl:value-of select="weight"/></td>
                    </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>