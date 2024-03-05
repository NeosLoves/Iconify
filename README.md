# NeosLoves.Iconify
Insert icons from the [Iconify](https://iconify.design)-Framework as SVG in a fusion template

## Usage
1. Go to https://icon-sets.iconify.design to find an icon
2. Copy the icon name including the collection name e.g. 'fa-brands:neos'
3. Use the provided generic component in fusion
```
  icon = NeosLoves.Iconify:Icon {
    name="fa-brands:neos"
  }
```
and within afx
```
  <NeosLoves.Iconify:Icon name="fa-brands:neos" />
```
4. or create your customized and reusable icon component
```
prototype(Neos.Neos:Icon) < prototype(NeosLoves.Iconify:Icon) {
  name="fa-brands:neos"
  color="#00adee"
}
```


### Prototype props
#### Mandatory
- `name` : the icon name including the collection name e.g. 'fa-brands:neos'

#### Optional
As described here https://github.com/iconify/json-tools.php?tab=readme-ov-file#getting-svg-icon

- `inline` : if true or "true" or "1" (string or boolean), code will include `vertical-align` style, making it behave like a glyph. See [inline vs block article](https://iconify.design/docs/inline-vs-block/).
- `width`, `height` : dimensions of icon. If only one attribute is set, another attribute will be set using icon's width/height ratio. Value can be string (such as "1em", "24px" or number). If value is "auto", icon's original dimensions will be used. If both width and height are not set, height defaults to "1em".
- `hFlip`, `vFlip` : if true or "true" or "1" (string or boolean), icon will be flipped horizontally and/or vertically.
- `flip` : alternative to "hFlip" and "vFlip", string. Value can be "horizontal", "vertical" or "horizontal,vertical"
- `rotate` : rotation. Value can be in degrees "90deg" (only 90, 180 and 270 rotations are available), percentages "25%" (25%, 50% and 75% are aliases of 90deg, 180deg and 270deg) or number 1-3 (1 - 90deg, 2 - 180deg, 3 - 270deg).
- `align` : alignment. This is useful if you have custom width and height set. Unlike other images, SVG keep aspect ratio (unless stated otherwise) when scaled. Value is comma or space separated string with possible strings (example: "left,top,crop"):
  - `left`, `right`, `center` : horizontal alignment
  - `top`, `middle`, `bottom` : vertical alignment
  - `crop` : crop parts that go outside of boundaries
  - `meet` : scale icon down to fit entire icon (opposite of crop)
- `color` : custom color string to replace currentColor. This is useful when using icon as background image because background image cannot use currentColor
- `box` : if true or "true" or "1" (string or boolean), icon will include extra rectangle matching its view box. This is useful to export icon to editor making icon easier to scale or place into its position in sketch because often editors ignore viewBox.
