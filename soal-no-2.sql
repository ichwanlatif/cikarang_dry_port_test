SELECT 
	Type, 
	COUNT(Type) AS Total_Type,
	SUM(Amount) AS Grand_Total
FROM 
[Order]
GROUP BY 
Type
UNION
SELECT 
	'Total',
	COUNT(Type),
	SUM(Amount)
FROM 
[Order]
