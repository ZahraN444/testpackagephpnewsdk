
# Car

## Structure

`Car`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `make` | `string` | Required | - | getMake(): string | setMake(string make): void |
| `model` | `string` | Required | - | getModel(): string | setModel(string model): void |
| `doors` | `int` | Required | - | getDoors(): int | setDoors(int doors): void |
| `engine` | [`Engine`](../../doc/models/engine.md) | Required | - | getEngine(): Engine | setEngine(Engine engine): void |

## Example (as JSON)

```json
{
  "make": "Toyota",
  "model": "Yaris",
  "doors": 2,
  "engine": {
    "horsepower": 150,
    "fuelType": "Petrol"
  }
}
```

