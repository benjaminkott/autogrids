# Automatic Grids

This is a configuration extension for Grid Elements.
It provides a clean configuration for Grid Elements to be compliant with TYPO3 Core Best-Practices.

## Installation

1. `composer require bk2k/autogrids`.
2. Install Extension in Extension Manager.
3. Remove `EXT:gridelements` Static Template!
4. Include `EXT:autogrids` Static Template.

## What does it do?

- It respects your `lib.contentElement` configuration.
- It gives you the freedom to define the behaviour yourself.
- It delivers streamlined markup.
- It delivers easy to understand templates.

## What does it not do?

- It does not deliver responsive grids out of the box!

## What does it generate?

### Grid-Elements TsConfig Configuration

```
tx_gridelements.setup {
    twocolumns {
        title = LLL:EXT:autogrids/Resources/Private/Language/locallang_be.xlf:layout.twocolumns.title
        description = LLL:EXT:autogrids/Resources/Private/Language/locallang_be.xlf:layout.twocolumns.description
        topLevelLayout = 0
        config {
            colCount = 2
            rowCount = 1
            rows {
                1 {
                    columns {
                        1 {
                            name = LLL:EXT:autogrids/Resources/Private/Language/locallang_be.xlf:column.1
                            colPos = 101
                        }
                        2 {
                            name = LLL:EXT:autogrids/Resources/Private/Language/locallang_be.xlf:column.2
                            colPos = 102
                        }
                    }
                }
            }
        }
    }
}

```

### HTML

```
<div class="grid-container grid-container-{layout | twocolumns}">
    <div class="grid-row grid-row-{number | 1}">
        <div class="grid-column grid-column-{colPos | 101}">
            <elements />
            ...
        </div>
        <div class="grid-column grid-column-{colPos | 102}">
            <elements />
            ...
        </div>
    </div>
</div>
```


## How does it work?

The only css added to the instance is a simple flexbox container and a column config that ensures that all elements are rendered with the same with.

```
.grid-row {
    display: flex;
}
.grid-column {
    flex-grow: 1;
    flex-basis: 0;
}
```

## How do i make the grid responsive?

You just add the css that makes the grid behave as you want it to.

### Unset default CSS

```
page.includeCSSLibs.autogrids >
```

### Example CSS

```
.grid-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -20px;
    margin-left: -20px;
}
.grid-column {
    width: 100%;
    padding-right: 20px;
    padding-left: 20px;
}
@media (min-width: 576px) {
    .grid-container-fourcolumns > .grid-row > .grid-column {
        width: calc(100% / 2);
    }
}
@media (min-width: 992px) {
    .grid-container-fourcolumns > .grid-row > .grid-column {
        width: calc(100% / 4);
    }
}
```
