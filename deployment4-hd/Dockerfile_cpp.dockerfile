FROM gcc:9.3

WORKDIR /app

COPY calculator.cpp .

RUN g++ -o calculator calculator.cpp

CMD ["./calculator"]