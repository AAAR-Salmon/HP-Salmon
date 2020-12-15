const depth = parseInt(process.argv[2]);
let dp = Array(depth);
dp[0] = [1];

for (let i = 1; i < depth; i++) {
	dp[i] = Array(i+1);
	dp[i][0] = 0;
	for (let j = 1; j < i; j++) {
		dp[i][j] = dp[i-1][j-1] + dp[i-1][j];
	}
	dp[i][i] = 1;
}

function tikzPascalTree(depth, i = 0, j = 0) {
	if (i === depth) {
		return '';
	} else if (i + 1 === depth) {
		return `node{${dp[i][j]}}`;
	} else if (j === 0) {
		return `node{${dp[i][j]}}
	child{${tikzPascalTree(depth, i+1, j)}}
	child{${tikzPascalTree(depth, i+1, j+1)}}`;
	} else {
		return `node{${dp[i][j]}}
	child{node{\\phantom{${dp[i+1][j]}}}}
	child{${tikzPascalTree(depth, i+1, j+1)}}`;
	}
}

console.log(`\\${tikzPascalTree(depth)};`);
