
# Engine

## Structure

`Engine`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `horsepower` | `int` | Required | - | getHorsepower(): int | setHorsepower(int horsepower): void |
| `fuelType` | [`string(FuelTypeEnum)`](../../doc/models/fuel-type-enum.md) | Required | - | getFuelType(): string | setFuelType(string fuelType): void |

## Example (as JSON)

```json
{
  "horsepower": 300,
  "fuelType": "Petrol"
}
```

