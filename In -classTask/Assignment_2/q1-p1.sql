SELECT OrderNumber, SUM(QuotedPrice * QuantityOrdered) 
FROM `order_details`
GROUP BY OrderNumber;