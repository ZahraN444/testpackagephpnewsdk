
# Paypal Mock Response Schema

## Structure

`PaypalMockResponseSchema`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mockApplicationCodes` | `string` | Required | Error code to simulate. | getMockApplicationCodes(): string | setMockApplicationCodes(string mockApplicationCodes): void |

## Example (as JSON)

```json
{
  "mock_application_codes": "DUPLICATE_INVOICE_ID"
}
```

