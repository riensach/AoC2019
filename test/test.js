
var data = `deal with increment 15
cut 2234
deal with increment 30
cut -1865
deal with increment 26
cut -5396
deal with increment 69
deal into new stack
deal with increment 64
cut -5111
deal with increment 23
deal into new stack
deal with increment 53
deal into new stack
deal with increment 54
cut -5384
deal with increment 18
cut -1325
deal into new stack
deal with increment 49
cut 1174
deal with increment 71
deal into new stack
cut -5632
deal with increment 12
cut -6300
deal with increment 73
cut -1310
deal into new stack
cut 6522
deal with increment 36
deal into new stack
cut 2878
deal with increment 50
cut 7596
deal with increment 40
cut 3179
deal with increment 27
cut 538
deal with increment 46
cut 7520
deal with increment 71
cut -3471
deal with increment 5
cut -274
deal into new stack
cut -846
deal into new stack
deal with increment 60
cut -5584
deal with increment 13
deal into new stack
deal with increment 47
deal into new stack
cut -5887
deal with increment 4
cut -7255
deal with increment 54
cut 8329
deal with increment 18
cut -1293
deal into new stack
cut -2840
deal into new stack
cut -2203
deal with increment 74
cut 4303
deal with increment 42
cut -7783
deal with increment 43
cut -4040
deal with increment 21
cut -8001
deal with increment 70
cut 7243
deal with increment 41
cut 9882
deal with increment 50
cut -1588
deal with increment 35
cut 4225
deal with increment 5
cut 9281
deal with increment 57
deal into new stack
deal with increment 10
deal into new stack
cut -29
deal with increment 71
cut -3739
deal with increment 20
cut 2236
deal with increment 9
deal into new stack
cut -1199
deal with increment 33
deal into new stack
deal with increment 30
cut -2735
deal with increment 54`;



const l = console.log
    const commands = data.toString().split('\n')
        .map(x => x.trim().split(' ')).map(row => {
            if (row[0] === 'cut') {
                return {
                    command: 'cut',
                    count: BigInt(row[1])
                }
            }
            if (row[1] === 'with') {
                return {
                    command: 'increment',
                    count: BigInt(row[3])
                }
            }

            return {
                command: 'new'
            }
        });

    let input = commands;
function solve(input, N, pos) {
  return input.reduce((pos, line) => A.caseParse(line,
    [/deal into new stack/, () => N - pos - 1],
    [/deal with increment (\S+)/, a => mulMod(pos, a, N)],
    [/cut (\S+)/, a => (pos - a) % N],
  ), pos);
}
l(solve(input, 10007, 2019))
function solve3(input, N, x, rep = 1) {
  let [a, b] = input.reduceRight(([a, b], line) => A.caseParse(line,
    [/new stack/, () => [(N - a) % N, (N + N - b - 1) % N]],
    [/increment (\S+)/, aa => [ modDiv(a, aa, N), modDiv(b, aa, N) ]],
    [/cut (\S+)/, bb => [ a, ((b + bb) %N + N )% N] ],
  ), [1, 0]);
  while (rep) {
    if (rep % 2) x = (mulMod(x,a,N) + b) % N;
    [a, b] = [mulMod(a,a,N), (mulMod(a,b,N) + b) % N];
    rep = Math.floor(rep / 2);
  }
  return x;
}
l(solve3(input, 119315717514047, 2020, 101741582076661));

function gcdExtended(a, b) {
  let x = 0, y = 1, u = 1, v = 0;
  while (a !== 0) {
    let q = Math.floor(b / a);
    [x, y, u, v] = [u, v, x - u * q, y - v * q];
    [a, b] = [b % a, a];
  }
  return [b, x, y];
}
function modInverse(a, m) {
  const [g, x] = gcdExtended(a, m);
  if (g !== 1) throw('Bad mod inverse')
  return (x + m) % m;
}
function modDiv(a, b, m) {
  return Number(BigInt(a) * BigInt(modInverse(b, m)) % BigInt(m));
}
function mulMod(a,b,m) {
  return Number(BigInt(a) * BigInt(b) % BigInt(m))
}