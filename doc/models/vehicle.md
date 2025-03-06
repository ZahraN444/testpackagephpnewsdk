
# Vehicle

## Structure

`Vehicle`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `make` | `string` | Required | - | getMake(): string | setMake(string make): void |
| `model` | `string` | Required | - | getModel(): string | setModel(string model): void |
| `year` | `int` | Required | - | getYear(): int | setYear(int year): void |
| `engine` | [`Engine`](../../doc/models/engine.md) | Required | - | getEngine(): Engine | setEngine(Engine engine): void |

## Example (as JSON)

```json
{
  "make": "Toyota",
  "model": "Camry",
  "year": 2022,
  "engine": {
    "horsepower": 300,
    "fuelType": "Petrol"
  }
}
```

